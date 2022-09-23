<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('admin');

        User::create([
            'name' => 'artista',
            'email' => 'modelo@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('admin');

        User::create([
            'name' => 'enterprise',
            'email' => 'enterprise@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('admin');

        User::create([
            'name' => 'root',
            'email' => 'root@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('root');

        User::create([
            'name' => 'studio',
            'email' => 'studio@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('root');

        User::create([
            'name' => 'guest',
            'email' => 'galax13a@yahoo.es',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('guest');

        User::create([
            'name' => 'fan',
            'email' => 'fan@dmi.is',
            'password' =>  bcrypt('1234c')            
        ])->assignRole('fancy');

        User::create([
            'name' => 'moderator',
            'email' => 'moderator@dmi.is',
            'password' =>  bcrypt('1234c')
            ])->assignRole('moderator');

        User::create([
            'name' => 'editor',
            'email' => 'editor@dmi.is',
            'password' =>  bcrypt('1234c')
            ])->assignRole('editor');
    
        }
    }