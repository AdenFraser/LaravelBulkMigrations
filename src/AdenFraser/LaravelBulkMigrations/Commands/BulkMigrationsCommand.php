<?php namespace AdenFraser\LaravelBulkMigrations;\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use AdenFraser\LaravelBulkMigrations\BulkMigrations;

class BulkMigrationsCommand {
    
    /**
     * Name of command, to be called with:
     *     `php artisan migrate:bulk`
     *     
     * @var string
     */
    protected $name = 'migrate:bulk';

    /**
     * Description of command
     * 
     * @var string
     */
    protected $description = 'Performs a pre-defined list of migrations as a bulk.';

    /**
     * BulkMigrations
     */
    protected $bulkMigrations;

    /**
     * __construct
     */
    public function __construct(BulkMigrations $bulkMigrations)
    {
        $this->bulkMigrations = $bulkMigrations;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $this->bulkMigrations->fire();

        $this->call('migrate');
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