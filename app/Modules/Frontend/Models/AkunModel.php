<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class AkunModel extends Model
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
    protected $deletedField  ="deleted_at";

    protected $validationRules = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama tidak boleh kosong'
            ]
        ],
        'username' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username tidak boleh kosong',
                'is_unique' =>  'Username sudah terdaftar'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email tidak boleh kosong',
                'valid_email' => 'Email tidak valid',
                'is_unique' =>  'Email sudah terdaftar'
            ]
        ],
        'telp' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nomor HP  tidak boleh kosong',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat tidak boleh kosong',
            ]
        ]
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return (object)$this->get()->getRowArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }
}