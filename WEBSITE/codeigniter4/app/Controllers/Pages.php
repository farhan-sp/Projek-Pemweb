<?php

namespace App\Controllers;

// use App\Models\GetFacilitiesModel;
// use App\Models\GetRoomsModel;
// use App\Models\GetUnitMaterialsModel;
// use App\Models\SaveFeedback;

class Pages extends BaseController
{
    // For Model
    // protected $facilityModel;
    // protected $roomModel;
    // protected $materialModel;
    // public function __construct() {
    //     $this->facilityModel = new GetFacilitiesModel();
    //     $this->roomModel = new GetRoomsModel();
    //     $this->materialModel = new GetUnitMaterialsModel();
    // }
    // public function convert($id)
    // {
    //     $model = new GetRoomsModel();
    //     $room = $model->find($id);

    //     if ($room && !empty($room['gambar'])) {
    //         return $this->response
    //             ->setContentType('image/jpeg')
    //             ->setBody($room['gambar']);
    //     }

    //     return $this->response
    //         ->setStatusCode(404)
    //         ->setBody('Image not found');
    // }

    // For Views
    public function home()
    {   
        return view('/pages/home.php');
    }

    public function about() 
    {
        return view('/pages/about.php');
    }

    public function sales() 
    {
        return view('/pages/sales.php');
    }

    public function unit_description() 
    {
        // $facility = $this->facilityModel->findAll();
        // $room = $this->roomModel->findAll();
        // $material = $this->materialModel->findAll();

        // $data = [
        //     'facility' => $facility,
        //     'room' => $room,
        //     'material' => $material
        // ];
        
        return view('/pages/unit_description.php');
    }

    public function contact() 
    {
        return view('/pages/contact');
    }

    // Get Data
    // public function save_feedback() {
    //     $feedback = new SaveFeedback();
    //     $data = [
    //         'nama_pelanggan' => $this->request->getPost('nama'),
    //         'email_pelanggan' => $this->request->getPost('email'),
    //         'keterangan' => $this->request->getPost('pesan')
    //     ];

    //     $feedback->save($data);
    // }

}
