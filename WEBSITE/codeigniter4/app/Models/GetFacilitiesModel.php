<?php

namespace App\Models;

use CodeIgniter\Model;

class GetFacilitiesModel extends Model {
    protected $table      = 'Fasilitas';
    protected $primaryKey = 'nama_fasilitas';
    protected $useAutoIncrement = false;
}