<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        'App\Console\Commands\SendNoimReminderEmail',
        'App\Console\Commands\SendBookingFortyEightHoursPriorMsg',
        'App\Console\Commands\SendNoimReminderMsgAtEightPm',
        'App\Console\Commands\SendTwentyFourHoursPriorMsg'
        
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        
        $schedule->command('fortyEightHours:msg')->daily();
        $schedule->command('noimReminder:emails')->daily();
        $schedule->command('noimReminderAtEight:msg')->everyMinute();
        $schedule->command('noimremindertwelvehours:email')->everyMinute();
        $schedule->command('twentyfourHours:msg')->everyMinute();
        
        // $schedule->command('mentor:MentorAvailabilityNotification')->hourly()->days([Schedule::SUNDAY]);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
