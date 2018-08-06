<?php
// app/Facades/SomeExampleClass.php.
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class URLHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'URLHelper';
    }
}
