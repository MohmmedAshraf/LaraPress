<?php

namespace Outhebox\LaraPress\Commands;

use Illuminate\Console\Command;

class LaraPressCommand extends Command
{
    public $signature = 'larapress';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
