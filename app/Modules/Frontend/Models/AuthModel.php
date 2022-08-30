<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class AuthModel extends Model
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

    protected $validationRulesDaftar = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama tidak boleh kosong'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules' => 'required',
            'errors' => [
                'required' => 'Username tidak boleh kosong'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[user.email]',
            'errors' => [
                'required' => 'Email tidak boleh kosong',
                'valid_email' => 'Email tidak valid',
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
        ],
        'password' => [
            'rules' => 'required|min_length[5]',
            'errors' => [
                'required' => 'Password tidak boleh kosong',
                'min_length' => 'Password minimal 5 kata'
            ]
        ],
    ];

    protected $validationRulesLogin = [
        'username' => [
            'label'  => 'Username',
            'rules' => 'required',
            'errors' => [
                'required' => 'Username tidak boleh kosong'
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
}