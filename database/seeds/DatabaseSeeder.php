<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = User::all();
        foreach($users as $user){
            if($user->name != "Admin"){
                
                $password = bcrypt( strtolower( substr($user->name, 0, 1)).substr($user->mobile,-4));

                $user->password = $password;

                $user->save();
            }
        }

        

        // $password = bcrypt( strtolower( substr($user->name, 0, 1)).substr($user->mobile,-4));

        // $user->password = $password;

        // $user->save();

    }
}
