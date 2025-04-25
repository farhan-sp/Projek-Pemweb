<?php
    namespace App\Controllers;

    class Style extends BaseController {
        public function home() {
            return view('css/home.css');
        }

        public function nav() {
            return view('css/nav.css');
        }
    }
?>