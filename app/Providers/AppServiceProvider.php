<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Al hacer uso de Facades\Route, podremos cambiar el nombre, mas bien traducirlo
        esto es debido a que al usar Route::resource realiza todo el llamado en ingles*/
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
            ]);
    }
}
