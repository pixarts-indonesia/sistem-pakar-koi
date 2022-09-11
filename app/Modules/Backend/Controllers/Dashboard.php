<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Backend\Models\DashboardModel;

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'view' => 'land/data',
            'data' => 'Hello World from Backend Module -> Dashboard!'
        ];
        return view('App\Modules\Backend\Views\Dashboard\index', $data);
    }
}
