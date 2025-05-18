<?php

namespace App\Controllers;

use App\Models\GetBeritaModel;
use App\Models\GetFacilitiesModel;
use App\Models\GetRoomsModel;
use App\Models\GetUnitMaterialsModel;
use App\Models\SaveFeedback;
use App\Models\GetAdmin;

class Pages extends BaseController
{
    // For Model
    protected $getAdmin;
    protected $facilityModel;
    protected $roomModel;
    protected $materialModel;
    protected $getBerita;
    public function __construct() {
        $this->facilityModel = new GetFacilitiesModel();
        $this->roomModel = new GetRoomsModel();
        $this->materialModel = new GetUnitMaterialsModel();
        $this->getAdmin = new GetAdmin();
        $this->getBerita = new GetBeritaModel();
    }

    // For Views
    public function home()
    {   
        return view('/pages/contents/home');
    }

    public function about() 
    {
        return view('/pages/contents/about');
    }

    public function sales() 
    {
        return view('/pages/contents/sales');
    }

    public function unit_description() 
    {
        $facility = $this->facilityModel->findAll();
        $room = $this->roomModel->findAll();
        $material = $this->materialModel->findAll();

        $data = [
            'facility' => $facility,
            'room' => $room,
            'material' => $material
        ];
        
        return view('/pages/contents/unit_description', $data);
    }

    public function contact() 
    {
        return view('/pages/contents/contact');
    }

    public function admin() {
        return view('/pages/contents/admin');
    }

    public function login() {
        return view('/pages/contents/login');
    }

    public function thanks() {
        return view('/pages/contents/thanks');
    }
    
    // Get Data
    public function save_feedback() {
        $feedback = new SaveFeedback();

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama'),
            'email_pelanggan' => $this->request->getPost('email'),
            'keterangan' => $this->request->getPost('pesan')
        ];

        $feedback->insert($data);
        return redirect()->to(uri: '/contact/thanks');
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

    // Edit
    public function edit() {
        $berita = $this->getBerita->findAll();
        $namaKolom = $this->getBerita->db->getFieldNames('Berita');

        $data = [
            'berita' => $berita,
            'kolom' => $namaKolom
        ];

        return view('/pages/contents/edit-page', $data);
    }

    // CRUD
    // Send Data
    public function update($id)
    {
        $kolom1 = $this->request->getPost('kolom1');
        $kolom2 = $this->request->getPost('kolom2');
        $kolom3 = $this->request->getPost('kolom3');
        $kolom4 = $this->request->getPost('kolom4');
        $kolom5 = $this->request->getPost('kolom5');

        $model = new GetBeritaModel();
        $model->update($id, [
            'gambar' => $kolom1,
            'nama' => $kolom2,
            'keterangan' => $kolom3,
            'tanggal' => $kolom4,
            'kata_kunci' => $kolom5
        ]);

        return redirect()->to('/edit')->with('message', 'Data berhasil disimpan!');
    }

    public function simpan()
    {
        $kolom1 = $this->request->getPost('kolom1');
        $kolom2 = $this->request->getPost('kolom2');
        $kolom3 = $this->request->getPost('kolom3');
        $kolom4 = $this->request->getPost('kolom4');
        $kolom5 = $this->request->getPost('kolom5');

        $model = new GetBeritaModel();
        $model->insert([
            'gambar' => $kolom1,
            'nama' => $kolom2,
            'keterangan' => $kolom3,
            'tanggal' => $kolom4,
            'kata_kunci' => $kolom5
        ]);

        return redirect()->to('/edit')->with('message', 'Data berhasil disimpan!');
    }

    public function delete($id)
    {
        $model = new GetBeritaModel();

        // Hapus berdasarkan ID
        if ($model->delete($id)) {
            return redirect()->to('/edit')->with('message', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
