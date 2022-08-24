<?php

namespace Database\Seeders;

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
        $user = new User;
        $user->name = "Jeremias Springfield";
        $user->email = "jeremy@gmail.com";
        $user->password = bcrypt('12345');
        $user->save();

        $user = new User;
        $user->name = "Homero Simpson";
        $user->email = "homer@gmail.com";
        $user->password = bcrypt('12345');
        $user->save();

        $user = new User;
        $user->name = "Barth Simpson";
        $user->email = "barth@gmail.com";
        $user->password = bcrypt('12345');
        $user->save();
    }
}
