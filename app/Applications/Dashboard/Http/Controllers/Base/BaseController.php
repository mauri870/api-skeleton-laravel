<?php
namespace App\Applications\Dashboard\Http\Controllers\Base;

use App\Core\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $view_namespace = 'dashboard::';
}