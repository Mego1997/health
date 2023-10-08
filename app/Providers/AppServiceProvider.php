<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $doctors=DB::table('doctors')->get();
        View::share('doctors',$doctors);

        $libraries=DB::table('libraries')->get();
        View::share('libraries',$libraries);

        $info_categories=DB::table('he__info__categories')->get();
        View::share('info_categories',$info_categories);

        $info_tags=DB::table('he__info__tags')->get();
        View::share('info_tags',$info_tags);

        $info_articles=DB::table('he__info__articles')->get();
        View::share('info_articles',$info_articles);

        $res_categories=DB::table('res__info__categories')->get();
        View::share('res_categories',$res_categories);


        $videos_categories=DB::table('video__categories')->get();
        View::share('videos_categories',$videos_categories);


        $per_events=DB::table('per__events')->get();
        View::share('per_events',$per_events);

        $non_events=DB::table('non__events')->get();
        View::share('non_events',$non_events);

        $fut_events=DB::table('fut__events')->get();
        View::share('fut_events',$fut_events);



    }
}
