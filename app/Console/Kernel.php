<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Psy\Command\Command;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\RegistraClima::class,
        Commands\limparTabela::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('command:registraClima')->everyMinute();
        $schedule->command('command:registraClima')->twiceDaily(0, 4);
        $schedule->command('command:registraClima')->twiceDaily(8, 12);
        $schedule->command('command:registraClima')->twiceDaily(16, 20);

        $schedule->command('command:limpaTabale')->dailyAt('20:30');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }
}
