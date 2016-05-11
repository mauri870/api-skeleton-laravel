<?php


namespace App\Core\Console\Commands\Docker;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use App\Core\Support\Traits\InteractsWithConsole;

class DockerRestartCommand extends Command
{
    use InteractsWithConsole;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:restart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Restart the docker containers defined on docker-compose.yml";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Recreating containers...');
        Artisan::call('docker:down');
        Artisan::call('docker:up');

    }
}