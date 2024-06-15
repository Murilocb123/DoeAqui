<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;


class service extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        // Get the name argument from the command
        $name = $this->argument('name');

        // Generate the class name by converting the name to studly case
        $className = Str::studly($name);

        // Generate the file path
        $filePath = app_path('services/' . $className . '.php');

        // Check if the file already exists
        if (file_exists($filePath)) {
            $this->error('Service already exists!');
            return;
        }else{
            // Create the services directory if it doesn't exist
            if (!is_dir(app_path('services'))) {
                mkdir(app_path('services'));
            }
        }

        // Generate the service class content
        $classContent = <<<EOD
        <?php

        namespace App\Services;

        class $className
        {
            // Your service class implementation goes here
        }
        EOD;

        // Create the service class file
        file_put_contents($filePath, $classContent);

        $this->info('Service created successfully!');

    }
}
