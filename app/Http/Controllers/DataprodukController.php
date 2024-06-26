<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataprodukController extends Controller
{
    public function index(){
        return view ('dataproduk');
    }
}