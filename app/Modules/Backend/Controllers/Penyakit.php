<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\PenyakitModel;

class Penyakit extends Controller
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
        $this->models = new PenyakitModel;
    }

    public function index()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data['title'] = 'Penyakit';
        $data['models'] = $this->models->getData();
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Penyakit\index', $data);
    }

    public function delete($id)
    {
        if ($this->models->delete($id)) {
            return redirect()->to('admin/penyakit')->with('success', "Data berhasil dihapus");
        } else {
            return redirect()->to('admin/penyakit')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');            
        }
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
                return redirect()->to('admin/penyakit')->with('success', "Data penyakit ($post->kode_penyakit) berhasil disimpan");
            }
            return redirect()->to('admin/penyakit/create')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }
        
        $post = (object)$this->request->getPost();
        $post->kode_penyakit = $rules->kode_penyakit ?? $this->models->getKodePenyakit();
        $data['title'] = 'Tambah';
        $data['value'] = 'create';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $post;
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Penyakit\create', $data);
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
                return redirect()->to('admin/penyakit/view/'.$id)->with('success', "Data berhasil diubah");
            }
            return redirect()->to('admin/penyakit/update/'.$id)->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Ubah';
        $data['value'] = 'readOnly';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $this->models->getData(['id' => $id]);
        $data['main'] = true;
        return view('App\Modules\Backend\Views\Penyakit\create', $data);
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
        return view('App\Modules\Backend\Views\Penyakit\view', $data);
    }

    public function upload()
    {
        $gambar = $this->request->getFile('gambar');
        $fileName = str_replace(" ", "-", $this->request->getPost('name')).'.png';
        $id = $this->request->getPost('id');
        $filePath = './assets/images/product/'.$fileName;
    
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $post = (object)[
                'img' => $fileName
            ];
            if ($gambar->move('./assets/images/product', $fileName) && $this->models->update($id, $post)) {
                return redirect()->to('admin/penyakit/view/'.$id)->with('success', "Gambar berhasil diunggah");
            } else {
                return redirect()->to('admin/penyakit/view/'.$id)->with('success', "Gambar gagal diunggah");
            }
        } else {
            return redirect()->to('admin/penyakit/view/'.$id)->with('success', "Gambar tidak ditemukan");
        }
    }
    

}
