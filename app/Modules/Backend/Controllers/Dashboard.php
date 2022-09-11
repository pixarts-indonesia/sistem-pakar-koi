<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\DashboardModel;

class Dashboard extends Controller
{
    protected $request;
    protected $session;
    protected $models;
    protected $validation;

    function __construct()
    {
        helper(['url', 'form']);
        $this->request = Services::request();
        $this->session = Services::session();
        $this->session->start();
        $this->models = new DashboardModel;
        $this->validation = Services::validation();
    }

    public function index()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data['title'] = 'Dashboard';
        $data['main'] = true;

        return view('App\Modules\Backend\Views\Dashboard\index', $data);
    }
}
