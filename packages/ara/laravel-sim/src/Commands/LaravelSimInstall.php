<?php

namespace ARA\LaravelSim\Commands;

use Illuminate\Console\Command;
use Artisan;

class LaravelSimInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-sim:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laravel Sim';

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
        Artisan::call('vendor:publish --provider="ARA\LaravelSim\LaravelSimServiceProvider" --force');
        echo "ARA Laravel Sim Installed! \n";
    }
}
