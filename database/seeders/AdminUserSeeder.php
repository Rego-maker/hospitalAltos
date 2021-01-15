<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::all()->count());

            User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password'=> 'admin'
            ]);
    }
}
