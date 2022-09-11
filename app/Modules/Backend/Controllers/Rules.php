<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\RulesModel;
class Rules extends Controller
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
        $this->models = new RulesModel();
    }

    public function index()
    {
        $data['title'] = 'Rules';
        $data['models'] = $this->models->getData();
        return view('App\Modules\Backend\Views\Rules\index', $data);
    }

    public function view($id = NULL)
    {
        $data['title'] = 'Detail';
        $data['models'] = $this->models->getData(
            ['rules.id' => $id]
        );
        return view('App\Modules\Backend\Views\Rules\view', $data);
    }

    public function create()
    {
        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            if (!$post->kode_rules) {
                $post->kode_rules = $rules->kode_rules ?? $this->models->getKodeRules();
            } else {
                $rules = $this->models->getData([
                    'rules.kode_rules' => $post->kode_rules,
                    'rules.kode_penyakit' => $post->kode_penyakit,
                    'rules.kode_gejala' => $post->kode_gejala
                ]);
                if (isset($rules->kode_rules)) {
                    return redirect()->to('admin/rules/create')->with('info', "Gejala sudah ada dalam rules ($rules->kode_rules)");
                }
            }
            if ($this->models->save($post)) {
                return redirect()->to('admin/rules')->with('success', "Data rules ($post->kode_rules) berhasil disimpan");
            }
            return redirect()->to('admin/rules/create')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Tambah';
        $data['value'] = 'create';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        return view('App\Modules\Backend\Views\Rules\create', $data);
    }

    public function delete($id)
    {
        if ($this->models->delete($id)) {
            return redirect()->to('admin/rules')->with('success', "Data berhasil dihapus");
        } else {
            return redirect()->to('admin/rules')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');            
        }
    }

    public function update($id = NULL)
    {
        $this->validation->setRules($this->models->validationRulesUpdate);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            if ($this->models->update($id, $post)) {
                return redirect()->to('admin/rules/view/'.$id)->with('success', "Data berhasil diubah");
            }
            return redirect()->to('admin/rules/update/'.$id)->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Ubah';
        $data['value'] = 'disabled';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $this->models->getData(['rules.id' => $id]);
        return view('App\Modules\Backend\Views\Rules\create', $data);
    }
}
