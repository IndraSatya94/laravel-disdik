<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function berita()
    {
        return view('berita');
    }

    
    //bidang paud
    public function izinpembelajaranpaud()
    {
        return view('pagesubmenu/bidangpaud/izinpembelajaranpaud');
    }
    public function legalisasiijazahpaud()
    {
        return view('pagesubmenu/bidangpaud/legalisasiijazahpaud');
    }
    public function penggantiijazahpaud()
    {
        return view('pagesubmenu/bidangpaud/penggantiijazahpaud');
    }
    public function pembetulanijazahpaud()
    {
        return view('pagesubmenu/bidangpaud/pembetulanijazahpaud');
    }
    public function izinpendirianpaud()
    {
        return view('pagesubmenu/bidangpaud/izinpendirianpaud');
    }


    //bidang SD
    public function izinpembelajaransd()
    {
        return view('pagesubmenu/bidangsd/izinpembelajaransd');
    }
    public function legalisasiijazahsd()
    {
        return view('pagesubmenu/bidangsd/legalisasiijazahsd');
    }
    public function penggantiijazahsd()
    {
        return view('pagesubmenu/bidangsd/penggantiijazahsd');
    }
    

}
