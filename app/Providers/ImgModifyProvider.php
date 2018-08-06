<?php
// app/Providers/ToolsServiceProvider.php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Tools\ImgModify;
class ImgModifyProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('ImgModify', function () {
            return new ImgModify;
        });
    }
}
