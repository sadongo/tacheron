<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspaceTacheronController extends Controller
{
    public function index() {
        return view("espacetacheron");
    }
}
