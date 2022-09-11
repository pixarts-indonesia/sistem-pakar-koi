<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\RespondenModel;

class Responden extends Controller
{
    protected $session;
    protected $request;
    protected $validation;
    protected $models;

    function __construct()
    {
        helper(['url', 'form']);
        $this->session = Services::session();
        $this->session->start();
        $this->request = Services::request();
        $this->validation = Services::validation();
        $this->models = new RespondenModel;
    }

    public function index()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data = [
            'title' => 'Responden',
            'view' => 'land/data',
            'data' => 'Hello World from Backend Module -> Responden!'
        ];
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Responden\index', $data);
    }
}
