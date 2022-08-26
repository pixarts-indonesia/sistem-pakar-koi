<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\HomeModel;

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['main'] = true;
        return view('App\Modules\Frontend\Views\Home\index', $data);
    }
}
