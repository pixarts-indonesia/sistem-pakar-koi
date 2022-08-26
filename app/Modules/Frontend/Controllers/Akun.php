<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\AkunModel;

class Akun extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Akun Page',
            'view' => 'land/data',
            'data' => 'Hello World from Frontend Module -> Akun!'
        ];
        return view('welcome_message');
    }
}
