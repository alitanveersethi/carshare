<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\addride;
use App\User;
class query extends Model
{



    protected $table='query';
    protected $fillable = [

        'sender_email',

        'sender_name',
        'message',
        'user_id',
        'post_id',



    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function post(){

        return $this->belongsTo('App\addride');




    }
}
