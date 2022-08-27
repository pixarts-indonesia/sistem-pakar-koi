<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\KontakModel;

class Responden extends Controller
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
        $data['title'] = 'Responden';
        $data['main'] = true;
        return view('App\Modules\Frontend\Views\Responden\index', $data);
    }
}
