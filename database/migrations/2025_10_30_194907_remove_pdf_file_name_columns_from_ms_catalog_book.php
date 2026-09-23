<?php

use App\Models\MsCatalogBook;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePdfFileNameColumnsFromMsCatalogBook extends Migration
{
    public function up(): void
    {
        $table = MsCatalogBook::getTableName();
        if (Schema::hasColumn($table, 'pdfFileName')) {
            Schema::table($table, function (Blueprint $t) {
                $t->dropColumn('pdfFileName');
            });
        }

        if (Schema::hasColumn($table, 'pdfFileNameGdriveID')) {
            Schema::table($table, function (Blueprint $t) {
                $t->dropColumn('pdfFileNameGdriveID');
            });
        }
    }

    public function down(): void
    {
        Schema::table(MsCatalogBook::getTableName(), function (Blueprint $table) {
            $table->string('pdfFileName', 255)->nullable()->after('coverImageGdriveID');
            $table->string('pdfFileNameGdriveID')->nullable()->after('pdfFileName');
        });
    }
}
