<?php
namespace App\Libraries;

class Widget
{
    public function error()
    {
        return view('widget/_error');
    }
    public function info()
    {
        return view('widget/_info');
    }
    public function success()
    {
        return view('widget/_success');
    }
}