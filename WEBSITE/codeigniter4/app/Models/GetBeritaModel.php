<?php
namespace App\Models;

use CodeIgniter\Model;

class GetBeritaModel extends Model {
    protected $table      = 'Berita';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar', 'nama', 'keterangan', 'tanggal', 'kata_kunci'];

}
?>