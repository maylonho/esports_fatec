<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        // Cria Gates explícitos
        Gate::define('admin', function (User $user) {
            return $user->nivel === 'admin';
        });

        Gate::define('editor', function (User $user) {
            return $user->nivel === 'editor';
        });

        Gate::define('user', function (User $user) {
            return $user->nivel === 'user';
        });

        Gate::define('admin-or-editor', function (User $user) {
        return in_array($user->nivel, ['admin', 'editor']);
    });
    }
}
