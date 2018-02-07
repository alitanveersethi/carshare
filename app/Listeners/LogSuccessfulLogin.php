<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\report_model;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(report_model $user)

    {
        $this->logins=$user;


    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)

    {   $user = report_model::find(1);

        $user->logins++;

        $user->save();

        if(count($user->logins)<20){

            $traffic=report_model::find(1);
            $traffic->traffic='LOW';
            $traffic->save();


        }
     elseif (count($user->logins)>20){

            $traffic=report_model::find(1);
         $traffic->traffic='NORMAL';
         $traffic->save();
     }



    }

}
