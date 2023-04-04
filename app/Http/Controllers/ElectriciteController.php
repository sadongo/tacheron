<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectriciteController extends Controller
{
    public function index() {
        return view("electricite");
    }
}
