<?php
namespace App\Models;

use CodeIgniter\Model;

class GetUnitMaterialsModel extends Model {
    protected $table      = 'Bahan_Material';
    protected $primaryKey = 'nama_unit';
    protected $useAutoIncrement = false;
}
?>