<?php

namespace App\Domains\Users;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'title', 'body','user_id'];


    /**
     * Relation between Users and Notifications
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Return a entypo icon name
     *
     * @return string
     */
    public function getIcon()
    {
        switch($this->type){
            case 'error':
                return 'cancel';
            case 'success':
                return 'check';
            case 'warning':
                return 'alert';
            case 'info':
                return 'info';
        }
    }
}
