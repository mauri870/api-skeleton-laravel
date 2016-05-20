<?php

namespace App\Domains\Users\Presenters;


use App\Domains\Users\Transformers\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class UserPresenter extends FractalPresenter
{
    protected $resourceKeyItem = 'users';
    protected $resourceKeyCollection = 'users';

    public function getTransformer()
    {
        return new UserTransformer();
    }
}