<?php

namespace Laraspace\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class LaraspaceClean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laraspace:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the Demo Files';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dirs_to_delete = config('laraspace.folders_to_delete');

        $files_to_delete = config('laraspace.files_to_delete');

        foreach($dirs_to_delete as $item){
            $success = $this->files->deleteDirectory(base_path($item));

            if($success){
                $this->info($item . ' -- Deleted');
            }
        }

        foreach($files_to_delete as $item){
            $success = $this->files->delete(base_path($item));

            if($success){
                $this->info($item . ' -- Deleted');
            }
        }

        $this->info('Project has been converted to Starer Kit!');

        //Replace Routes & Menu Files.

        $this->files->copy(
            base_path('app/Space/Core/Files/demo_menu.php'),
            base_path('config/menu.php'));

        $this->files->copy(
            base_path('app/Space/Core/Files/demo_routes.php'),
            base_path('app/Http/routes.php'));

        $this->files->copy(
            base_path('app/Space/Core/Files/DashboardController.php'),
            base_path('app/Http/Controllers/DashboardController.php'));

    }
}
