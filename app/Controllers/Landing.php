<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Landing extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Grosirbajuku.com - Grosir Baju Murah Langsung Dari Pabrik Terbaik & Terpercaya Sejak 2008",
        ];
        return view('landing/index', $data);
    }
}
