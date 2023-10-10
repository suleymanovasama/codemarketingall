<?php

namespace App\Providers;

use App\Services\RepositoryService\LogoService;
use App\Services\RepositoryService\OurgradService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RepositoryService\StaticService;

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
    public function boot( StaticService $staticService, LogoService $logoService, OurgradService $ourgradService)
    {
        Paginator::useBootstrap();
        $statics=$staticService->CachedStatics();
        $logo=$logoService->CachedLogo();
        $ourgrads=$ourgradService->CachedOurgrad();
        View::share([
            'statics'=>$statics,
            'logo'=>$logo,
            'ourgrads'=>$ourgrads,
        ]);
    }
}

