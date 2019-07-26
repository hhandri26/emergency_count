<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModels;
use DB;
use App\User;

class VisitorController extends Controller
{
    public function index(){
        $data = VisitorModels::get_data();
		return view('visitor/table',compact('data'));
    }

    public function form(){
        return view('visitor/form');
    }

    public function add(){
        return VisitorModels::save_ok();
    }

    public function edit(){
        $data['get']    = VisitorModels::get_data();
		return view('visitor/form',$data);
	}
}