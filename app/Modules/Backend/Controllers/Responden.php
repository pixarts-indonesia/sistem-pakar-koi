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

        $data['title'] = 'Responden';
        $data['models'] = $this->models->getData();
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Responden\index', $data);
    }

    public function create()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            if ($this->models->save($post)) {
                return redirect()->to('admin/responden')->with('success', "Data responden ($post->pertanyaan) berhasil disimpan");
            }
            return redirect()->to('admin/responden/create')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Tambah';
        $data['value'] = 'create';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Responden\create', $data);
    }

    public function delete($id)
    {
        if ($this->models->delete($id)) {
            return redirect()->to('admin/responden')->with('success', "Data berhasil dihapus");
        } else {
            return redirect()->to('admin/responden')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');            
        }
    }

    public function update($id = NULL)
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            if ($this->models->update($id, $post)) {
                return redirect()->to('admin/responden')->with('success', "Data berhasil diubah");
            }
            return redirect()->to('admin/responden/update/'.$id)->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Ubah';
        $data['value'] = 'readOnly';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $this->models->getData(['id' => $id]);
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Responden\create', $data);
    }
}
