<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'country' => 'Tunisie',
            'ville' => 'sousse',
            'adresse' => 'Cité SNIT Sidi Ameur Monasti',
            'codepostal' => '5000',
             'email_verified_at' =>'2023-02-23 20:54:07'
            ]);
    }
}
