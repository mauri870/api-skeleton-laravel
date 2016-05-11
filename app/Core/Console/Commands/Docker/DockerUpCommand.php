<?php


namespace App\Core\Console\Commands\Docker;

use Illuminate\Console\Command;
use App\Core\Support\Traits\InteractsWithConsole;

class DockerUpCommand extends Command
{
    use InteractsWithConsole;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Start the docker containers defined on docker-compose.yml";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Starting the docker containers in background...');
        $this->runInTerminal('docker-compose up -d');

        $this->info('Fixing file permissions...');
        $this->runInTerminal('docker exec nginx chmod 777 -R /var/www/storage && docker exec nginx chmod 777 -R /var/www/vendor');

        $this->info('That`s it! Happy coding!');
    }
}