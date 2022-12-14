<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'first_name' => 'Avinash',
            'last_name' => 'Kishwe',
            'email' => 'akishwe@yahoo.com',
            'password' => Hash::make('12345678'),
            'slug' => 'avinash-kishwe',
            'status' => '1'
        ]);
    }
}
