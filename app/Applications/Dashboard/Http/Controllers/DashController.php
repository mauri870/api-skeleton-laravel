<?php

namespace App\Applications\Dashboard\Http\Controllers;

use App\Applications\Dashboard\Http\Controllers\Base\BaseController;

class DashController extends BaseController
{
    public function index()
    {
        return $this->view('index');
    }
}
