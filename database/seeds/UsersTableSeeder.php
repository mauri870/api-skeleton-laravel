<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
             'name'=>'Test',
             'email'=>'test@test.com',
             'address' => 'Street 223',
             'telephone' => '12345678',
             'password'=> bcrypt('12345678'),
             'created_at'=> \Carbon\Carbon::now(),
             'updated_at'=> \Carbon\Carbon::now()
            ]
        );

        factory(App\Domains\Users\User::class, 2)->create();
    }
}
