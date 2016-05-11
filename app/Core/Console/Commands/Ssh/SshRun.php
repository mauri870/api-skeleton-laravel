<?php

namespace App\Core\Console\Commands\Ssh;

use Illuminate\Console\Command;
use phpseclib\Net\SSH1;

class SshRun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ssh:run {shell : The command to execute on remote server}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run a shell command on remote server';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $command = $this->argument('shell');
        \SSH::run($command);
    }
}
