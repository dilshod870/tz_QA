<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\EventA::creating(function($model ) {
            $model->ip = \Request::ip();
        });

        \App\EventB::creating(function($model ) {
            $model->ip = \Request::ip();
        });

        \App\EventA::created(function($model ) {
            //dd($model);
            \App\Jobs\SendMessage::dispatch($model->email);

            $users = \App\User::role('admin_event_a')->get();

            foreach ($users as $key => $user) {
                \App\Jobs\SendMessageAdmin::dispatch($user->email,$model);
            }
        });

        \App\EventB::created(function($model ) {

            ///dd($model);
            \App\Jobs\SendMessage::dispatch( $model->email);

            $users = \App\User::role('admin_event_b')->get();

            foreach ($users as $key => $user) {
                \App\Jobs\SendMessageAdmin::dispatch($user->email,$model);
            }

        });


    }
}
