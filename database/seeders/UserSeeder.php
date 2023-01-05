<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'administrador@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'male',
            'active' => 1,
            'remember_token' => Str::random(10)
        ]);

        //  User::where('name', 'Administrador')->first();
        $user->syncRoles('Admin');
        // Fake users
        // User::factory()->times(2)->create();
        $user2 = User::create([
            'name' => 'Empleado',
            'email' => 'empleado@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'male',
            'active' => 1,
            'remember_token' => Str::random(10)
        ]);
        $user2->syncRoles('Empleado');


    }
}
