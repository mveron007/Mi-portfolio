<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class)->times(50)->create();

        // $users= factory(App\User::class)->times(50)->create();

        $filePath=storage.path('appp/public/avatars');
        // username	password	name	lastname	email	email_verified_at	country	state	avatar	created_at	updated_at	remember_token

        DB::table('users')->insert([
           'username' => Str::random(10),
           'password' => bcrypt('password'),
           'name' => Str::random(10),
           'lastname' => Str::random(10),
           'email' => Str::random(10).'@gmail.com',
           'country' => 'Argentina',
           'state' => 'Buenos Aires',
           'avatar'=> $faker->image($filePath, 300, 300, null, false),
           'updated_at': "2017-04-18 19:54:18",
           'created_at': "2017-04-18 19:54:18",

       ]);
    }
}
