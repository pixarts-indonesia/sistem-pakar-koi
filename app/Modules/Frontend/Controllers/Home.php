<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\HomeModel;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'view' => 'land/data',
            'data' => 'Hello World from Frontend Module -> Home!'
        ];
        return view('welcome_message');
    }
}
