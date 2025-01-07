<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class HistoriRespondenModel extends Model
{
    protected $table      = "histori_responden";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'params',
        'jumlah',
        'nilai',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules = [];
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