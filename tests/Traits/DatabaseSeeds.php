<?php

namespace App\Tests\Traits;


trait DatabaseSeeds
{

    /**
     * Run the database seeds
     *
     * @return mixed
     * @before
     */
    public function runDatabaseSeeds()
    {
        $this->artisan('db:seed');
    }
}