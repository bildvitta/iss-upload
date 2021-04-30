<?php

namespace Bildvitta\IssImage\Commands;

use Illuminate\Console\Command;

/**
 * Class IssImageCommand.
 *
 * @package Bildvitta\IssImage\Commands
 */
class IssImageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'iss-image';

    /**
     * The console command description.
     *
     * @var string|null
     */
    public $description = 'My command';

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->comment('All done');
    }
}
