<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('includes.topnavigation', function ($view) {
            $headerData['h_news'] = DB::table('cms_newspublication')->where('cms_newspublication.is_deleted', 0)->orderBy('news_publish_date', 'desc')->take(4)->get();
            $headerData['h_seminars'] = DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(4)->get();
            $headerData['h_company_profile'] = DB::table('company_info')->take(1)->get()[0];
            $view->headerData = $headerData;
        });

        view()->composer('includes.footer', function ($view) {
            $footerData['f_company_profile'] = DB::table('company_info')->take(1)->get()[0];
            $view->footerData = $footerData;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
