<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create permission based on the routes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $routes = \Route::getRoutes();
        $permissions = [];
        foreach ($routes as $route) {
            $name = $route->getName();
            if ($name) {
                $permissions[] = $name;
            }
        }
        $permissions = array_unique($permissions);
        $permissions = array_map(function ($permission) {
            return [
                'name' => $permission,
                'guard_name' => 'web',
            ];
        }, $permissions);
        \Spatie\Permission\Models\Permission::insert($permissions);
        $this->info('Permissions created successfully.');
    }
}
