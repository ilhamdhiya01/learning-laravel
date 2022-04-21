<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::factory()->count(10)->create();
        // collect([
        //     [
        //         'name' => 'Ilham Dhiya Ulhaq',
        //         'username' => 'ilhamdhiya01',
        //         'email' => 'ulhaqilhamdhiya@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Annisa Wahyu Hidayah',
        //         'username' => 'annisawahyu01',
        //         'email' => 'annisa@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        //     ])->each(function($user){
        //         DB::table('users')->insert($user);
        //     });
    }
}
