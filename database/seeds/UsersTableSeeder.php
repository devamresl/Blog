<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::where('email', 'amr@gmail.com')->first();

        $user = DB::table('users')->where('email', 'amr@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Amr',
                'email' => 'amr@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
            ]);
        }
    }
}
