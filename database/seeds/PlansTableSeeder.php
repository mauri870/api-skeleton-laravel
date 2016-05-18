<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert(
            [
                'name'=>'Plan 6',
                'qt_users'=> 150,
                'description' => 'The bigger Plan ever!',
                'value' => '500',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );

        factory(App\Domains\Plans\Plan::class, 5)->create();
    }
}
