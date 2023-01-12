<?php

namespace Astersnake\FakerChile\Commands;

use Illuminate\Console\Command;

class FakerChileCommand extends Command
{
    public $signature = 'faker-chile';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
