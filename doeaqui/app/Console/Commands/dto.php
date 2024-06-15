<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dto {name} {--model=}';

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

        // Get the model option from the command
        $model = $this->option('model');

        // Generate the class name by converting the name to studly case
        $className = ucfirst($name);

        // Generate the file path
        $filePath = app_path('DTO/' . $className . '.php');

        // Check if the file already exists
        if (file_exists($filePath)) {
            $this->error('DTO already exists!');
            return;
        } else {
            // Create the DTO directory if it doesn't exist
            if (!is_dir(app_path('DTO'))) {
                mkdir(app_path('DTO'));
            }
        }
        $fields = [];
        if($model){
            $modelPath = app_path('Models/' . $model . '.php');

            // Check if the model file exists
            if (!file_exists($modelPath)) {
                $this->error('Model does not exist!');
                return;
            }
            // load fieds cast from model 
            $modelContent = file_get_contents($modelPath);
            $modelContent = explode("\n", $modelContent);
            foreach($modelContent as $line){
                if(strpos($line, 'protected $fillable') !== false){
                    $fields = explode(',', str_replace(['protected $fillable = [', '];'], '', $line));
                    $fields = array_map('trim', $fields);
                }
            }
            
        }
        // Generate the DTO class content
        $classContent = <<<EOD
        <?php

        namespace App\DTO;

        class $className
        {
            // Your DTO class implementation goes here
        }
        EOD;

        // Write the DTO class content to the file
        file_put_contents($filePath, $classContent);

        $this->info('DTO created successfully!');
    }
}
