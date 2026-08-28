<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

   
    public function run(): void
    {
       
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin ShopVerse',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'customer@example.com'],
            [
                'name' => 'Customer ShopVerse',
                'password' => bcrypt('password'),
                'role' => 'user',
            ]
        );

       
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
