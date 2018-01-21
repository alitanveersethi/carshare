<?php

use Illuminate\Database\Seeder;
use App\report_model;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report1 = new report_model();
        $report1->admin = 'Admin';
        $report1->users = 'Ali Tanveer';
        $report1->login ='2';
        $report1->posts = '9';
        $report1->traffic = 'HIGH';
        $report1->usage = '10 per day';
        $report1->save();
        $report2 = new report_model();
        $report2->admin = 'Driver';
        $report2->users = 'Omer Ali';
        $report2->login ='8';
        $report2->posts = '9';
        $report2->traffic = 'LOW';
        $report2->usage = '4 per day';
        $report2->save();
        $report4 = new report_model();
        $report4->admin = 'Passenger';
        $report4->users = 'Zamar khan';
        $report4->login ='9';
        $report4->posts = '17';
        $report4->traffic = 'MEDIUM';
        $report4->usage = '2 per day';
        $report4->save();




    }
}