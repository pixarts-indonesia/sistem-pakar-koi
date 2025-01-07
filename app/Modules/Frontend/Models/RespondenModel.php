<?php namespace App\Modules\Frontend\Models;

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
            'pertanyaan' => 'required',
            'errors' => [
                'required' => 'Tidak boleh ada data kosong'
            ]
        ]
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return $this->orderBy('id', 'ASC')->get()->getResultArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }
}