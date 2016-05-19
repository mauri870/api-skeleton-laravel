<?php

namespace App\Applications\Api\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class SwaggerCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger:generate
                            {path=app/ : Path for map annotations}
                            {--publish : Put the mapping file in production}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Scan and generate a swagger.json mapping";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Build Documentation...');

        $path = $this->argument('path');
        $publish = $this->option('publish');

        $swagger = \Swagger\scan($path);

        $this->info('Documentation generated!');

        if ($publish === true) {
            $fileName = storage_path('app/swagger.json');
            $this->info('Mapping file published!');
        } else {
            $fileName = Carbon::now()->timestamp.'-swagger.json';
        }

        file_put_contents($fileName, $swagger);
    }
}