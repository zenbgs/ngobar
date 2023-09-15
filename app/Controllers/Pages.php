<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebBelajar'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];
        return view('pages/contact', $data);
    }
}
