<?php namespace AdenFraser\LaravelBulkMigrations;

class BulkMigrations {

    /**
     * Migrations list
     *
     * Loaded from the Migrations config file
     *
     * @var array
     */
    protected $migrations;

    /**
     * __construct
     */
    public function __construct()
    {
        $this->migrations = $this->migrationsList();
    }

    /**
     * Execute the migration runner.
     *
     * @return mixed
     */
    public function fire()
    {
        if ($this->hasMigrations()) {

            $this->bulkMigrations->runMigrations();

        } else {
            throw new Exceptions\EmptyMigrationsListException();
        }
    }

    /**
     * Returns the list of migrations
     * 
     * @return array
     */
    public function migrationList()
    {
        $migrationsList = Config::get('migrations');

        // Run through each
        // check if the directory or package exists
        // if it doesn,t throw exception:
        //      throw new Exceptions\InvalidMigrationException();
        // return a finalized array

        return $migrationsList;
    }

    protected function hasMigrations()
    {

        // check if we have migrations that can be run
        // return true or false

    }

    protected function runMigrations()
    {

        // loop migrations
        
    }

    protected function runSingleMigration()
    {

        // If migration is a package {
        // 
        // } else if Migrations is a path {
        // 
        // } else {
        // 
        //  // Throw exception to inform user they have 
        //  // migrations outside of the array format
        //  
        // }
        
    }

    protected function runPathMigration()
    {

        // Run path migration
        
    }

    protected function runVendorMigration()
    {

        // Run vendor migration
        
    }

}

