<?php

namespace App\Models;

use CodeIgniter\Model;

class SaveFeedback extends Model {
    protected $table      = 'Ulasan_Pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_pelanggan', 'email_pelanggan', 'keterangan'];
}