<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        //
        Schema::defaultStringLength(191);

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Test Bölümü');
            $event->menu->add([
                'text' => 'Test',
                'url' => 'testet',
            ],[
                'text' => 'Shop',
                'url' => 'shopping',
            ],[
                'text' => 'Task',
                'url' => 'tasks',
            ],[
                'text' => 'Vue Task',
                'url' => 'vuetask',
            ]
                );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
