<?php

namespace App\Core\Console\Commands\Docker;

use Illuminate\Console\Command;
use App\Core\Support\Traits\InteractsWithConsole;

class DockerDownCommand extends Command
{
    use InteractsWithConsole;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Stop the docker containers defined on docker-compose.yml";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Stopping containers...');
        $this->runInTerminal('docker-compose down');

        $this->info('Done!');

    }
}