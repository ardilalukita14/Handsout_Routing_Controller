<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return "<b> DATA MAHASISWA </b> <br><br> 
        NIM : 1941720043 <br> 
        Nama : Ardila Lukita Sari";
    }
}