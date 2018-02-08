<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report_model extends Model
{
    protected $table='report';
    protected $fillable = [
         'user', 'logins','posts','traffic',
    ];

}
