<?php
namespace App;
use Illuminate\Http\Request;
use App\User;

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

    public static function totalCustomer()
    {
        return User::where('is_admin', null)->count();

    }

}