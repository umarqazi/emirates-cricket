<?php

namespace App\Providers;

use App\Contact;
use App\ContentPage;
use App\Development;
use App\Employee;
use App\Gallery;
use App\Image;
use App\InternationalNews;
use App\News;
use App\Player;
use App\Policies\ContentPagePolicy;
use App\Policies\DevelopmentPolicy;
use App\Policies\EmployeePolicy;
use App\Policies\ImagePolicy;
use App\Policies\InternationalNewsPolicy;
use App\Policies\SettingPolicy;
use App\Policies\TeamPlayerPolicy;
use App\Policies\TeamPolicy;
use App\Policies\TournamentPolicy;
use App\Policies\UpdatePolicy;
use App\Setting;
use App\Sponsor;
use App\Team;
use App\TeamPlayer;
use App\Tournament;
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
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }

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
        Image::class => ImagePolicy::class,
        Contact::class => ContactPolicy::class,
        Update::class => UpdatePolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
        Team::class => TeamPolicy::class,
        TeamPlayer::class => TeamPlayerPolicy::class,
        ContentPage::class => ContentPagePolicy::class,
        Development::class => DevelopmentPolicy::class,
        Employee::class => EmployeePolicy::class,
        InternationalNews::class => InternationalNewsPolicy::class,
        Setting::class => SettingPolicy::class,
        Tournament::class => TournamentPolicy::class,
    ];
}
