<?php
namespace App\Controllers;

use App\Models\GetBeritaModel;
use App\Models\SaveFeedback;
use CodeIgniter\Controller;

class CRUD extends Controller {
    // CRUD Form Edit
    // Update
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
    // Tambah
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
    // Hapus
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

    // Save Feedback
    // Get Data
    public function save_feedback() {
        $feedback = new SaveFeedback();

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama'),
            'email_pelanggan' => $this->request->getPost('email'),
            'keterangan' => $this->request->getPost('pesan')
        ];

        $feedback->insert($data);
        return redirect()->to(uri: '/thanks');
    }
}
?>