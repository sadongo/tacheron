<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainesController extends Controller
{
    public function index() {
        return view("domaines");
    }
}
