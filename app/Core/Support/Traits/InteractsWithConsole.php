<?php

namespace App\Core\Support\Traits;

use App\Core\Exceptions\CommandExecutionException;

trait InteractsWithConsole
{
    /**
     * Execute a shell command and throw an exception if it fail.
     *
     * @param $command  string  The command to run
     *
     * @throws CommandExecutionException
     *
     * @return void
     */
    protected function runInTerminal($command)
    {
        system($command, $output);
        if ($output != 0) {
            throw new CommandExecutionException("The command $command return an error");
        }
    }
}