<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AviaTicketController extends Controller
{
    public function index(){
        return view('avia-ticket/index');
    }
    public function find(Request $request){
        
    }
}
