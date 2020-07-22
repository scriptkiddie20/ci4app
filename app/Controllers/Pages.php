<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "HomePage"
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About Page"
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "Contact Us"
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
