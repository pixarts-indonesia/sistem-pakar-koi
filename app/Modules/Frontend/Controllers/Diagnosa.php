<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\DiagnosaModel;

class Diagnosa extends Controller
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }

        $data = [
            'title' => 'Diagnosa Page',
            'view' => 'land/data',
            'data' => 'Hello World from Frontend Module -> Diagnosa!'
        ];
        return view('welcome_message');
    }
}
