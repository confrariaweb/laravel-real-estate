<?php

namespace ConfrariaWeb\RealEstate\Commands;

use Illuminate\Console\Command;
use Artisan;

class InstallPackage extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cw-real-estate:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install package cw RealEstate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        Artisan::call('db:seed', [
            '--class' => 'ConfrariaWeb\User\Databases\Seeds\DatabaseSeeder'
        ]);
        Artisan::call('db:seed', [
            '--class' => 'ConfrariaWeb\Account\Databases\Seeds\DatabaseSeeder'
        ]);
    }

}
