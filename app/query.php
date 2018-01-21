<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{



    protected $table='query';
    protected $fillable = [

        'sender_email',
        'sender_subject',
        'sender_name',
        'message',
        'user_id',


    ];
}
