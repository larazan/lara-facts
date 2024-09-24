<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->bootMacros();

        Builder::macro('liveSearch', function (string $attribute, string $search) {
            return $search ? $this->where($attribute, 'LIKE', "%{$search}%") : $this;
        });
    }

    public function bootMacros()
    {
        require base_path('resources/macros/blade.php');
    }

}
