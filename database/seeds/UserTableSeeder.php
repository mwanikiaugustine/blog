<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users=[[
            'name'     => 'Augustine M',
            'email'    => 'agusmwa@yahoo.com',
            'password' => Hash::make('guruman1'),
        ],[
            'name'     => 'Duncan s',
            'email'    => 'mwanikiaugustine@gmail.com',
            'password' => Hash::make('guruman1'),
        ],[
            'name'     => 'J M',
            'email'    => 'adrianjiru@gmail.com',
            'password' => Hash::make('guruman1'),
        ]];
        foreach($users as $user){
            User::create($user);
        }
    }
}
