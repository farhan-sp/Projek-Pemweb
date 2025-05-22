<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class GetAdmin extends Model {
        protected $table      = 'users';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['username', 'email', 'password', 'role'];

        public function getAdminData($email) {
            return $this->where('email', $email)->first();
        }
    }
?>