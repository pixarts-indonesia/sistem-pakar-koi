<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\KontakModel;

class Responden extends Controller
{
    public function index()
    {
        $data['title'] = 'Responden';
        $data['main'] = true;
        return view('App\Modules\Frontend\Views\Responden\index', $data);
    }
}
