<?php

namespace App\http\Controllers;

class HomeController extends controller{


    function showBeranda(){
        return view('template-admin.beranda');
    }

    
    function showKategori()
    {
        return view('template-admin.kategori');
    }
}