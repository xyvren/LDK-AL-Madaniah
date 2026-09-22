<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles if not exist
        $roles = ['Superadmin','HelperAdmin','HelperCelsyahid','HelperEventMart','HelperSPAM','HelperMedia','HelperLetter'];
        foreach ($roles as $r) {
            Role::firstOrCreate(['name' => $r]);
        }

        // Create admin user
        $email = 'admin@ubb.ac.id';
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name'             => 'Admin LDK Al-Madaniah',
                'password'         => Hash::make('admin123'),
                'email_verified_at'=> now(),
            ]
        );

        $user->assignRole('Superadmin');
    }
}
