<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Contracts\Factory;
use App\OauthProviders\CodigoFacilitoOauthProvider;

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
        $this->bootCodigoFacilitoSocialite();
    }

    private function bootCodigoFacilitoSocialite()
    {
        $socialite = app(Factory::class);
        $socialite->extend(
            'codigofacilito',
            function ($app) use ($socialite) {
                return $socialite->buildProvider(CodigoFacilitoOauthProvider::class, config('services.codigofacilito'));
            }
        );
    }
}
