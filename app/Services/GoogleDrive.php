<?php

namespace App\Services;

use Exception;
use Throwable;
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GoogleDrive
{
    private string $folderID;

    public function __construct(string $folderID = '')
    {
        $this->folderID = $folderID ?: (config('filesystems.disks.google.folderId') ?: env('GOOGLE_DRIVE_FOLDER_ID') ?: 'root');
    }

    /**
     * Check if Google Drive disk is properly configured
     */
    private function hasGoogleCredentials(): bool
    {
        $config = config('filesystems.disks.google');
        return !empty($config['clientId']) && !empty($config['clientSecret']) && !empty($config['refreshToken']);
    }

    /**
     * Save uploaded file to local public/uploads directory
     *
     * @param mixed $file
     * @param string $fileName
     * @return array ['fileName' => string, 'gdriveID' => string]
     */
    private function saveLocalFile($file, string $fileName): array
    {
        $uploadDir = public_path('uploads');
        if (!File::isDirectory($uploadDir)) {
            File::makeDirectory($uploadDir, 0777, true, true);
        }

        File::put($uploadDir . DIRECTORY_SEPARATOR . $fileName, File::get($file));

        return [
            'fileName' => $fileName,
            'gdriveID' => $fileName,
        ];
    }

    /**
     * Upload an image file to Google Drive or fallback to local storage
     *
     * @param mixed $file The file to upload
     * @param string $fileName The desired file name
     * @param string $filePath The path where to store the file
     * @return array ['fileName' => string, 'gdriveID' => string]
     */
    public function uploadImage($file, string $fileName, string $filePath): array
    {
        if ($this->hasGoogleCredentials()) {
            try {
                if (Storage::cloud()->put($filePath, File::get($file))) {
                    $fileMetaData = Storage::disk("google")->getAdapter()->getMetadata($filePath);
                    if ($fileMetaData && !empty($fileMetaData['path'])) {
                        $gdriveID = basename($fileMetaData['path']);
                        return [
                            'fileName' => $fileName,
                            'gdriveID' => $gdriveID,
                        ];
                    }
                }
            } catch (Throwable $e) {
                Log::warning('Google Drive image upload failed, falling back to local storage: ' . $e->getMessage());
            }
        }

        return $this->saveLocalFile($file, $fileName);
    }

    /**
     * Upload any file to Google Drive or fallback to local storage
     *
     * @param mixed $file The file to upload
     * @param string $fileName The desired file name
     * @param string $filePath The path where to store the file
     * @return array ['fileName' => string, 'gdriveID' => string]
     */
    public function uploadFile($file, string $fileName, string $filePath): array
    {
        if ($this->hasGoogleCredentials()) {
            try {
                if (Storage::cloud()->put($filePath, File::get($file))) {
                    $fileMetaData = Storage::disk("google")->getAdapter()->getMetadata($filePath);
                    if ($fileMetaData && !empty($fileMetaData['path'])) {
                        $gdriveID = basename($fileMetaData['path']);
                        return [
                            'fileName' => $fileName,
                            'gdriveID' => $gdriveID,
                        ];
                    }
                }
            } catch (Throwable $e) {
                Log::warning('Google Drive file upload failed, falling back to local storage: ' . $e->getMessage());
            }
        }

        return $this->saveLocalFile($file, $fileName);
    }

    /**
     * Delete an image file
     *
     * @param string $fileID The ID or filename of the file to delete
     */
    public function deleteImage(string $fileID): void
    {
        $this->deleteFile($fileID);
    }

    /**
     * Delete any file (from local or Google Drive)
     *
     * @param string $fileID The ID or filename of the file to delete
     */
    public function deleteFile(string $fileID): void
    {
        if (empty($fileID)) {
            return;
        }

        $localPath = public_path('uploads' . DIRECTORY_SEPARATOR . $fileID);
        if (File::exists($localPath)) {
            File::delete($localPath);
            return;
        }

        if ($this->hasGoogleCredentials()) {
            try {
                $fullPath = $this->folderID . '/' . $fileID;
                if (Storage::disk('google')->exists($fullPath)) {
                    Storage::disk('google')->delete($fullPath);
                }
            } catch (Throwable $e) {
                Log::warning('Google Drive file deletion failed: ' . $e->getMessage());
            }
        }
    }

    /**
     * Get a shareable URL for a file
     *
     * @param string $fileID The ID or filename
     * @return string The shareable URL
     */
    public function getFileUrl(string $fileID): string
    {
        if (empty($fileID)) {
            return '';
        }

        return url('/drive-media/' . $fileID);
    }

    /**
     * Get image URL
     *
     * @param string $fileID The ID or filename
     * @return string The image URL
     */
    public function getImageUrl(string $fileID): string
    {
        if (empty($fileID)) {
            return '';
        }

        return url('/drive-media/' . $fileID);
    }

    /**
     * Get a direct download URL for a file
     *
     * @param string $fileID The unique file ID or filename
     * @return string The direct binary file URL
     */
    public function getFileDownloadUrl(string $fileID): string
    {
        if (empty($fileID)) {
            return '';
        }

        return url('/drive-media/' . $fileID);
    }

    /**
     * Download a file to a local path
     *
     * @param string $fileID The ID or filename
     * @param string $localPath Destination local path
     * @return string
     */
    public function downloadFile(string $fileID, string $localPath): string
    {
        $localSource = public_path('uploads' . DIRECTORY_SEPARATOR . $fileID);
        if (File::exists($localSource)) {
            File::copy($localSource, $localPath);
            return $localPath;
        }

        try {
            $fileStream = Storage::cloud()->readStream($fileID);
            if (!$fileStream) {
                throw new RuntimeException('Failed to read file from Google Drive');
            }
            $targetStream = fopen($localPath, 'w+');
            stream_copy_to_stream($fileStream, $targetStream);
            fclose($targetStream);
            return $localPath;
        } catch (Throwable $e) {
            Log::error('downloadFile error: ' . $e->getMessage());
            throw new RuntimeException('File download failed: ' . $e->getMessage(), 0, $e);
        }
    }
}
