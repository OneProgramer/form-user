<?php

namespace Database\Seeders;

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
        
        User::create([
            "name"=> "amar",
            "phone"=> '01092329104',
            "email"=> 'amaribnyasserkamal2002@gmail.com',
            "gender"=> 'ذكر',
            "color"=>'الأحمر',
            "date"=> '10-03-1445',
            "img"=> 'img1',
        ]);

        User::create([
            "name"=> "amar",
            "phone"=> '0109259104',
            "email"=> 'amaribnyasserkamal2002@gmail.com',
            "gender"=> 'ذكر',
            "color"=>'الأحمر',
            "date"=> '10-03-1445',
            "img"=> 'img1',
        ]);

        User::create([
            "name"=> "amar",
            "phone"=> '010923829104',
            "email"=> 'amaribnyasserkamal2002@gmail.com',
            "gender"=> 'ذكر',
            "color"=>'الأحمر',
            "date"=> '10-03-1445',
            "img"=> 'img1',
        ]);

        User::create([
            "name"=> "amar",
            "phone"=> '01092329104',
            "email"=> 'amaribnyasserkamal2002@gmail.com',
            "gender"=> 'ذكر',
            "color"=>'الأحمر',
            "date"=> '10-03-1445',
            "img"=> 'img1',
        ]);

        User::create([
            "name"=> "amar",
            "phone"=> '010923292104',
            "email"=> 'amaribnyasserkamal2002@gmail.com',
            "gender"=> 'ذكر',
            "color"=>'الأحمر',
            "date"=> '10-03-1445',
            "img"=> 'img1',
        ]);
    }
}
