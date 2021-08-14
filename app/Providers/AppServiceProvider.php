<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('convert', function ($value) {
            return "<?php echo number_format($value, 2); ?>";
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->register();
        Gate::define('admin', function($user) {
            return $user->isAdmin;
        });
        Gate::define('guest', function($user) {
            return !$user->isAdmin;
        });

    }

}
