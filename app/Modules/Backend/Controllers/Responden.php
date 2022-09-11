<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Backend\Models\RespondenModel;

class Responden extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Responden',
            'view' => 'land/data',
            'data' => 'Hello World from Backend Module -> Responden!'
        ];
        return view('App\Modules\Backend\Views\Responden\index', $data);
    }
}
