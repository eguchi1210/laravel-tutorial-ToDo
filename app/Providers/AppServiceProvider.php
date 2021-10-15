<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Folder;
use App\Policies\FolderPolicy;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
      Folder::class => FolderPolicy::class,
    ];
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
        //
    }
}
