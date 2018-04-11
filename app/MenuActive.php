<?php
namespace App;
use Illuminate\Http\Request;

class MenuActive
{
    public static function active($uris = array())
    {
        foreach ($uris as $uri)
        {
            if (\Request::is($uri)){
                return 'active';
            }
        }
        return '';
    }

}