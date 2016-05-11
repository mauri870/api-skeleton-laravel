<?php
namespace App\Applications\Dashboard\Notifications\Facades;

use Illuminate\Support\Facades\Facade;

class Notify extends Facade
{
    protected static function getFacadeAccessor() {
        return 'Notify';
    }
}