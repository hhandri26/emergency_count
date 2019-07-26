<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentModels;
use DB;
use App\User;

class DepartmentController extends Controller
{
    public function index(){
        $data = DepartmentModels::get_data();
		return view('department/table',compact('data'));
    }

    public function form(){
        return view('department/form');
    }

    public function add(){
        return DepartmentModels::save_ok();
    }

    public function edit(){
        $data['get']    = DepartmentModels::get_data();
		return view('department/form',$data);
	}
}