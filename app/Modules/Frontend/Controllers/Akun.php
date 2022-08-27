<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\AkunModel;

class Akun extends Controller
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
        $data['title'] = 'Akun';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Akun\index', $data);
    }
}
