<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailprodukController extends Controller
{
    public function index(){
        return view ('detailproduk');
    }
}