<?php

namespace App\Domains\Users\Transformers;

use App\Domains\Users\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => (int) $user->id,
            'name' => $user->name,
            'address' => $user->address,
            'telephone' => $user->telephone,
            'email' => $user->email,
        ];
    }
}