<?php namespace App\Modules\Backend\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = "user";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'username',
        'nama',
        'email',
        'telp',
        'alamat',
        'password',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  = "deleted_at";

    protected $validationRules    = [
        'username' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username tidak boleh kosong'
            ]
        ],
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama tidak boleh kosong'
            ]
        ],
        'email' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Email tidak boleh kosong'
            ]
        ],
        'telp' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Telp tidak boleh kosong'
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat tidak boleh kosong'
            ]
        ],
        'password' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Password tidak boleh kosong'
            ]
        ],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false, $array = false)
    {
        if ($where === false)
        {
            return $this->get()->getResultArray();
        }
        if ($array === false) {
            return (object)$this->where($where)->get()->getRowArray();
        } else {
            return $this->where($where)->get()->getResultArray();
        }
    }
}