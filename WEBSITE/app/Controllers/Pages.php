<?php

namespace App\Controllers;

use App\Models\GetFacilitiesModel;
use App\Models\GetRoomsModel;
use App\Models\GetUnitMaterialsModel;
use App\Models\GetBeritaModel;

class Pages extends BaseController
{
    // For Views
    public function home()
    {   
        $beritaModel = new GetBeritaModel();
        $berita = $beritaModel->findAll();

        $data = [
            'berita' => $berita
        ];

        return view('/pages/contents/home', $data);
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
        $model_facility = new GetFacilitiesModel();
        $facility = $model_facility->findAll();
        
        $model_room = new GetRoomsModel();
        $room = $model_room->findAll();

        $model_material = new GetUnitMaterialsModel();
        $material = $model_material->findAll();

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

    public function edit() {
        $model_berita = new GetBeritaModel();
        $berita = $model_berita->findAll();
        $kolom = $model_berita->db->getFieldNames('Berita');

        $data = [
            'berita' => $berita,
            'kolom' => $kolom
        ];
        
        return view('/pages/contents/edit-page', $data);
    }

    public function thanks() {
        return view('/pages/contents/thanks');
    }
}
