<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\DiagnosaModel;

class Diagnosa extends Controller
{
    protected $session;

    function __construct()
    {
        $this->session = Services::session();
        $this->session->start();
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        $data['title'] = 'Diagnosa';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Diagnosa\index', $data);
    }
}
