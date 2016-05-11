<?php

namespace App\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $view_namespace;

    /**
     * Return a view with namespace
     *
     * @param string $view
     * @param array  $data
     * @param array  $mergeData
     *
     * @return \Illuminate\View\View
     */
    protected function view($view = null, $data = [], $mergeData = [])
    {
        if (!empty($this->view_namespace) and !str_contains($view, '::')) {
            $view = $this->view_namespace . $view;
        }
        return view($view, $data, $mergeData);
    }
}
