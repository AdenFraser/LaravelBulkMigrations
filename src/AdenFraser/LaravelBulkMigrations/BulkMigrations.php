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

            $this->runMigrations();

        } else {
            throw new Exceptions\EmptyMigrationsListException();
        }
    }

    /**
     * Returns the list of migrations
     * 
     * @return array
     */
    public function migrationsList()
    {
        return \Config::get('laravelbulkmigrations::migrations');
    }

    /**
     * Check if we have Migrations to Run
     * 
     * @return boolean
     */
    protected function hasMigrations()
    {
        // TO DO:
        // check if we have migrations that can be run
        // return true or false
        return true;
    }

    /**
     * Run the Migrations Configuration File
     * 
     * @return
     */
    protected function runMigrations()
    {
        foreach ($this->migrations as $migrationType => $migrationsList) {
            if ($migrationType != 'package' && $migrationType != 'path') {
                throw new Exceptions\InvalidMigrationConfigurationException();
            }

            $this->runMigrationsList($migrationType, $migrationsList);
        }
    }

    /**
     * Loops through the Migrations List
     * 
     * @param  string $migrationType 
     * @param  array $migrations    
     * 
     * @return
     */
    protected function runMigrationsList($migrationType, $migrations)
    {
        foreach ($migrations as $migration) {
            $this->runSingleMigration($migrationType, $migration);
        }
    }

    /**
     * Calls a single Migration to run
     * 
     * @param  string $type      
     * @param  string $migration 
     * @return
     */
    protected function runSingleMigration($type, $migration)
    {
        \Artisan::call('migrate', ["--{$type}" => $migration]);
    }

    /**
     * Checks the validity of a Migration
     * 
     * @return boolean
     */
    protected function checkMigration()
    {
        // To Do:
        // Check the validity of a defined migration
        return true;
    }

}

