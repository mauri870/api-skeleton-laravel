<?php

namespace App\Domains\Plans;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'qt_users', 'description', 'value'];
}
