<?php
// app/Providers/ToolsServiceProvider.php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Tools\URLHelper;
class URLServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('URLHelper', function () {
            return new URLHelper;
        });
    }
}
