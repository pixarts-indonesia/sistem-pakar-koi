<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBobotModel extends Model
{
    protected $table      = "master_bobot";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nama',
        'nilai',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules    = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama tidak boleh kosong'
            ]
        ],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return $this->get()->getResultArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }
}
