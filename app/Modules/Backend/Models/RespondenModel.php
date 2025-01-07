<?php namespace App\Modules\Backend\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table      = "responden";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'pertanyaan',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules = [
        'pertanyaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pertanyaan tidak boleh kosong'
            ]
        ]
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