<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('nama_role', 'pengguna')->first();
        User::create([
            'nama' => 'Jibril',
            'username' => 'jbrl_01',
            'email' => 'jibril@gmail.com',
            'password' => Hash::make('1'),
            'role_id' => $role->id,
        ]);
    }
}
