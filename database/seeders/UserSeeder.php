<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
            [
                'name'      => 'Bendahara',
                'email'     => 'bendahara@localhost.com',
                'password'  =>bcrypt('bendahara')
            ],
        ];
        // simpan data pengguna kedalam users
        DB::table('users')->insert($userData);

    }
}
