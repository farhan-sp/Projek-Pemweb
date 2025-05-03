<?php
namespace App\Models;

use CodeIgniter\Model;

class GetRoomsModel extends Model {
    protected $table      = 'Ruangan';
    protected $primaryKey = 'nama_ruangan';
    protected $useAutoIncrement = false;
}
?>