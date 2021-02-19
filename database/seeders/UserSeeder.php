<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::truncate();

        $user = User::create([
            'name'   => 'Administrator',
            'email'  => 'admin@admin.com',
            'password' => 'password',
        ]);

        $user->givePermissionTo('super admin');
    }
}
