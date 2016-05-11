<?php

namespace App\Core\Console\Commands\Ssh;

use Illuminate\Console\Command;
use phpseclib\Net\SSH1;

class SshPull extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ssh:pull
                            {--folder=public_html : The application root folder}
                            {--branch=master : The branch to pull the application}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the project with git on remote server.';

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
        $folder = $this->option('folder');
        $branch = $this->option('branch');
        \SSH::run(['cd '.$folder,'git pull origin '.$branch]);
    }
}
