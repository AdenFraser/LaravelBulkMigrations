<?php namespace AdenFraser\LaravelBulkCommands\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RefreshBulkMigrationsCommand {
    
    /**
     * Name of command, to be called with:
     *     `php artisan migrate:bulk`
     *     
     * @var string
     */
    protected $name = 'migrate:bulk:refresh';

    /**
     * Description of command
     * 
     * @var string
     */
    protected $description = 'Rolls back all migrations and then re-runs the pre-defined list of migrations in bulk.';

    /**
     * __construct
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
    public function fire()
    {
        
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [

        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [

        ];
    }

}