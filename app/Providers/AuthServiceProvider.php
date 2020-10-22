<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin', 'teacher']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasRole(['admin']);
        });


        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('admin-content', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('teacher-content', function($user){
            return $user->hasRole('teacher');
        });

        Gate::define('student-content', function($user){
            return $user->hasRole('user');
        });




        //
    }
}
