<?php

namespace App\Console\Commands;

use App\ExampleCollection;
use Illuminate\Console\Command;

class CollectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collection:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel Collections';

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
     * @return int
     */
    public function handle()
    {
        dd((new ExampleCollection())->example());
    }
}
