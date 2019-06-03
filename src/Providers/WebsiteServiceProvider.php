<?php

namespace O2Web\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{


    public function boot()
    {
        info('o2-web/website bootstraped');
    }

    public function register()
    {
        # code...
    }

}
