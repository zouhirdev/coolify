<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Migration extends Command
{
    protected $signature = 'start:migration';

    protected $description = 'Start Migration';

    public function handle()
    {
        if (config('constants.migration.is_migration_enabled')) {
            $this->info('Migration is enabled on this server.');
            $exitCode = $this->call('migrate', ['--force' => true, '--isolated' => true]);
            $this->info('Migration completed with exit code: '.$exitCode);
            exit($exitCode);
        } else {
            $this->info('Migration is disabled on this server.');
            exit(0);
        }
    }
}
