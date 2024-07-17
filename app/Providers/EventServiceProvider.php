<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\User;
use App\Models\Preview;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        User::created(function ($user) {
            Preview::create([
                'user_id' => $user->id,
                'display_preview_class' => 'default-class',
                'banner_preview' => 'default-banner-url',
                'profile_preview' => 'default-profile-url',
                'title_preview' => 'Default Title',
                'about_preview' => 'Default About',
            ]);
        });
    }
}
