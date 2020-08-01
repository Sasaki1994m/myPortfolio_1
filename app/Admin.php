<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//↓を追加で書く
use Illuminate\Notifications\Notifiable;
//[Authenticatable]を追加で書く　※User.phpと書くことは同じ
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
