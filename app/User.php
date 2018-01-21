<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\role;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'email', 'password','cnic','cell_no','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var adrray
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
