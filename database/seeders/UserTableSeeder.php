<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        
            // This is for Admin
        [
            'name' => 'Naimur Rahman Sazib',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
            'status' => 'active',
        ],

        // This is for Agent
        [
            'name' => 'Agent Vinod',
            'username' => 'agent',
            'email' => 'agent@agent.com',
            'password' => bcrypt('12345'),
            'role' => 'agent',
            'status' => 'active',
        ],

        // This is for User
        [
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345'),
            'role' => 'user',
            'status' => 'active',
        ],
    ]);
    }
}
