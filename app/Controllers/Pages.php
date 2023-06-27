<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('layout/header')
             . view('home')
             . view('layout/footer');
    }

    public function collection()
    {
        return view('layout/header')
             . view('collection')
             . view('layout/footer');
    }

    public function poster()
    {
        return view('layout/header')
             . view('poster')
             . view('layout/footer');
    }

    public function form()
    {
        return view('layout/header')
             . view('form')
             . view('layout/footer');
    }

    public function view($page = 'home')
    {
        // ...
    }
}