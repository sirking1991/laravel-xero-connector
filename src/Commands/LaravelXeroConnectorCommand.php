<?php

namespace Sirking1991\LaravelXeroConnector\Commands;

use Illuminate\Console\Command;

class LaravelXeroConnectorCommand extends Command
{
    public $signature = 'laravel-xero-connector';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
