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
        Commands\limparTabela::class,
        Commands\verificaDoencas::class,
        Commands\calculaMediasDiarias::class,
        Commands\atualizaGrausDias::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('command:registraClima')->cron('* 0 * * * ');
        $schedule->command('command:registraClima')->cron('* 4 * * * ');
        $schedule->command('command:registraClima')->cron('* 8 * * * ');
        $schedule->command('command:registraClima')->cron('* 12 * * * ');
        $schedule->command('command:registraClima')->cron('* 16 * * * ');
        $schedule->command('command:registraClima')->cron('* 20 * * * ');

        $schedule->command('command:medias')->cron('10 20 * * *');
        $schedule->command('command:atualizaGrausDias')->cron('20 20 * * *');
        $schedule->command('command:limpaTabela')->cron('30 20 * * *');
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
