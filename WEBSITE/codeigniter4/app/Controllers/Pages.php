<?php

namespace App\Controllers;

class Pages extends BaseController
{
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

    public function contact() 
    {
        return view('/pages/contact.php');
    }
}
