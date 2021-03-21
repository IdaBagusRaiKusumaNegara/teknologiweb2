<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1915101024',
            'nama'=>'Ida Bagus Rai Kusuma Negara'
        );
        $data['user']='';
        return view('admin.beranda', compact('title','data'));
    }

    public function dasboard(){
        $title = "Data Dasboard";
        return view('admin.dasboard', compact('title'));
    }
}
