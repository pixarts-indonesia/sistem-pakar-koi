<?php
namespace App\Libraries;

class Widget
{
    public function error()
    {
        return view('App\Modules\Frontend\Views\Widget\_error');
    }
    public function info()
    {
        return view('App\Modules\Frontend\Views\Widget\_info');
    }
    public function success()
    {
        return view('App\Modules\Frontend\Views\Widget\_success');
    }
}