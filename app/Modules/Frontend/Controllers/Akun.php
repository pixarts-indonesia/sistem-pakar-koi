<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\AkunModel;

class Akun extends Controller
{
    protected $request;
    protected $session;
    protected $models;

    function __construct()
    {
        $this->request = Services::request();
        $this->session = Services::session();
        $this->session->start();
        $this->models = new AkunModel;
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }

        $data['user'] = $this->models->where(['id' => $this->session->get('user')->id])->get()->getRowArray();
        $data['title'] = 'Akun';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Akun\index', $data);
    }

    public function update()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        if ($this->request->getPost()) {
            $post = (object)$this->request->getPost();
            return redirect()->to('akun')->with('success', 'Berhasil mengubah data');
        }
        $data['title'] = 'Ubah Akun';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Akun\update', $data);
    }
}
