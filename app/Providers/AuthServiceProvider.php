<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('SuperAdminOnly', function ($user) {
            if($user->job_title == 'Super Admin')
            {
                return true;
            }
            return false;
        });

        Gate::define('AdminOnly', function ($user) {
            if($user->job_title == 'Admin')
            {
                return true;
            }
            return false;
        });
    }
}
