<?php
namespace App\Controllers;

use App\Models\GetAdmin;
use CodeIgniter\Controller;

class Users extends Controller {
    protected $getAdmin;
    function __construct() {
        $this->getAdmin = new GetAdmin();
    }
    // Admin 
    public function add_admin() {
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $data = [
            'username' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'password' => $password
        ];

        $this->getAdmin->insert($data);
    }

    // Login
    public function cek_login() {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email'    => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali ke halaman login dengan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Get Input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $admin = $this->getAdmin->getAdminData($email);

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'email' => $admin['email'],
                'role' => $admin['role'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/home');
        } else {
            echo "Hello";
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/home');
    }
}
?>