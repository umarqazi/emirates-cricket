<?php

namespace App\Providers;

use App\Contact;
use App\Gallery;
use App\News;
use App\Player;
use App\Policies\UpdatePolicy;
use App\Sponsor;
use App\Update;
use App\User;
use App\Policies\ContactPolicy;
use App\Policies\GalleryPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PlayerPolicy;
use App\Policies\RolePolicy;
use App\Policies\SponsorPolicy;
use App\Policies\UserPolicy;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\Response;
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
        User::class => UserPolicy::class,
        Sponsor::class => SponsorPolicy::class,
        Player::class => PlayerPolicy::class,
        News::class => NewsPolicy::class,
        Gallery::class => GalleryPolicy::class,
        Contact::class => ContactPolicy::class,
        Update::class => UpdatePolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class
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
