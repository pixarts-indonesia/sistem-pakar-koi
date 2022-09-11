<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\GejalaModel;

class Gejala extends Controller
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
        $this->models = new GejalaModel;
    }

    public function index()
    {
        $data['title'] = 'Gejala';
        $data['models'] = $this->models->getData();
        return view('App\Modules\Backend\Views\Gejala\index', $data);
    }

    public function delete($id)
    {
        if ($this->models->delete($id)) {
            return redirect()->to('admin/gejala')->with('success', "Data berhasil dihapus");
        } else {
            return redirect()->to('admin/gejala')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');            
        }
    }

    public function create()
    {
        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            $post->kode_gejala = $rules->kode_gejala ?? $this->models->getKodeGejala();
            if ($this->models->save($post)) {
                return redirect()->to('admin/gejala')->with('success', "Data gejala ($post->kode_gejala) berhasil disimpan");
            }
            return redirect()->to('admin/gejala/create')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Tambah';
        $data['value'] = 'create';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        return view('App\Modules\Backend\Views\Gejala\create', $data);
    }

    public function update($id = NULL)
    {
        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            if ($this->models->update($id, $post)) {
                return redirect()->to('admin/gejala/view/'.$id)->with('success', "Data berhasil diubah");
            }
            return redirect()->to('admin/gejala/update/'.$id)->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Ubah';
        $data['value'] = 'readOnly';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $this->models->getData(['id' => $id]);
        return view('App\Modules\Backend\Views\Gejala\create', $data);
    }

    public function view($id = NULL)
    {
        $data['title'] = 'Detail';
        $data['models'] = $this->models->getData(
            ['id' => $id]
        );
        return view('App\Modules\Backend\Views\Gejala\view', $data);
    }
}
