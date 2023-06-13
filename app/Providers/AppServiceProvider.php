<?php

namespace App\Providers;

use App\Models\TPersonalAccessToken;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

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
    public function boot(UrlGenerator $url)
    {
        // TO REMOVE "DATA" KEY FROM RESOURCES
        JsonResource::withoutWrapping();


        // TO CHANGE DEFAULT PAGE PARAM FROM PAGE TO I_PAGE.
        Paginator::currentPageResolver(function()
        {
            return $this->app['request']->input('i_page');
        });

        if (env('APP_ENV') !== 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }

        Blueprint::macro('dropForeignSafe', function ($args) {
            if (app()->runningUnitTests()) {
                // Do nothing
                /** @see Blueprint::ensureCommandsAreValid */
            } else {
                $this->dropForeign($args);
            }
        });


        // To Change The Sanctum Default Model
        Sanctum::usePersonalAccessTokenModel(TPersonalAccessToken::class);

    }
}
