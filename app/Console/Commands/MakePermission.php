<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

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
        $routes = Route::getRoutes();
        $permissions = [];
        foreach ($routes as $route) {
            $name = $route->getName();
            $middleware = $route->middleware();
            if (
                in_array('auth', $middleware)
                && $name
                && $name !== 'logout'
                && $name !== 'admin.'
            ) {
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
        Permission::insert($permissions);
    }
}
