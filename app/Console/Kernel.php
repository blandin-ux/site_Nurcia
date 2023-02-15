<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\User;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        //
        \App\Console\Commands\Test::class,
    ];


    protected function schedule(Schedule $schedule)
    {

        $schedule->command('mail:send')->everyMinute();

    }



    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
