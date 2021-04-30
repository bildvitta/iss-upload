<?php

namespace Bildvitta\IssImage\Commands;

use Illuminate\Console\Command;

class IssImageCommand extends Command
{
    public $signature = 'iss-image';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
