<?php
namespace App\Models;

use CodeIgniter\Model;

class GetRoomsModel extends Model {
    protected $table      = 'Ruangan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar', 'nama'];
}
?>