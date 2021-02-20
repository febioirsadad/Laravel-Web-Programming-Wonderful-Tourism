<?php

use Illuminate\Database\Seeder;

class userseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             ['name'=> 'febio',
             'email'=> 'irsadadf@gmail.com',
             'phone'=> '085156897870',
             'role'=>'admin',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'udin',
             'email'=> 'udin@gmail.com',
             'phone'=> '085156897870',
             'role'=>'admin',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'irsadad',
             'email'=> 'irsadad@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'bioeff',
             'email'=> 'bioeff@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'tom',
             'email'=> 'tom@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'danu',
             'email'=> 'danu@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'farhan',
             'email'=> 'farhan@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
             ['name'=> 'febi',
             'email'=> 'febi@gmail.com',
             'phone'=> '085156897870',
             'role'=>'user',
             'password'=> bcrypt('12345678'),
             ],
        ]);
    }
}
