<?php
namespace App\Applications\Site\Http\Controllers;

use App\Applications\Site\Http\Controllers\Base\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return $this->view('welcome');
    }
}