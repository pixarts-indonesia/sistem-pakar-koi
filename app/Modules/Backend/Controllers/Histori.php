<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Backend\Models\HistoriModel;

class Histori extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Histori',
            'view' => 'land/data',
            'data' => 'Hello World from Backend Module -> Histori!'
        ];
        return view('App\Modules\Backend\Views\Histori\index', $data);
    }
}
