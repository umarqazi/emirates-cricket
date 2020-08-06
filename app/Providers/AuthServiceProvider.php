<?php

namespace App\Providers;

use App\Contact;
use App\Gallery;
use App\Http\Controllers\ContactController;
use App\News;
use App\Player;
use App\Policies\ContactPolicy;
use App\Policies\GalleryPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PlayerPolicy;
use App\Policies\RolePolicy;
use App\Policies\SponsorPolicy;
use App\Policies\UserPolicy;
use App\Sponsor;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        App\User::class => App\Policies\UserPolicy::class,
        App\Sponsor::class => App\Policies\SponsorPolicy::class,
        App\Player::class => App\Policies\PlayerPolicy::class,
        App\News::class => App\Policies\NewsPolicy::class,
        App\Gallery::class => App\Policies\GalleryPolicy::class,
        App\Contact::class => App\Policies\ContactPolicy::class,
        Spatie\Permission\Models\Role::class => App\Policies\RolePolicy::class,
        Spatie\Permission\Models\Permission::class => App\Policies\PermissionPolicy::class
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
    }
}
