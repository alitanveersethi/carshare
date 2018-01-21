<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addride extends Model
{
    protected $table='new_trip';
    protected $fillable = [

   'title',
   'source_city',
   'destination_city',
    'seats_available',
          'fare',
          'car_no',
        'time',
        'date',
        'user_id',


];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
  }
}
?>