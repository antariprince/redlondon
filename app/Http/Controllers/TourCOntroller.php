<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourCOntroller extends Controller
{
    public function index(){
    	return view('tour');
    }
}
