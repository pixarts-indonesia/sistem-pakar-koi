<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\UserModel;

class User extends Controller
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
        $this->models = new UserModel;
    }

    public function index()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data['title'] = 'User';
        $data['main'] = true;
        $data['models'] = $this->models->getData(['level' => 2], true);
        return view('App\Modules\Backend\Views\User\index', $data);
    }

    public function forgotPassword($id = NULL)
    {
        $params = $this->models->getData(['id' => $id]);
        $rand = rand(10000, 99999);
        $password_hash = password_hash("$params->username-$rand", PASSWORD_DEFAULT);
        if ($this->models->update($id, ['password' => $password_hash, 'deleted_at' => 0])) {
            return redirect()->to('admin/user/view/'.$id)->with('success', "Password berhasil diubah menjadi $params->username-$rand");
        }
        return redirect()->to('admin/user')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
    }

    public function view($id = NULL)
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data['title'] = 'Detail';
        $data['main'] = true;
        $data['models'] = $this->models->getData(
            ['id' => $id]
        );
        return view('App\Modules\Backend\Views\User\view', $data);
    }
}
