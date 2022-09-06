<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogs extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "Selamat datang di halaman website kami";
    }
}
