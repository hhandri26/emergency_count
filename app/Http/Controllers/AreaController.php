<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaModels;
use DB;
use App\User;

class AreaController extends Controller
{
    public function index(){
        $data = AreaModels::get_area();
		return view('area/table',compact('data'));
    }

    public function form(){
        $parent = AreaModels::get_parent_area();
        return view('area/form',compact('parent'));
    }

    public function add(){
        return AreaModels::save_ok();
    }

    public function edit(){
        $data['get']    = AreaModels::get_area();
        $data['parent'] = AreaModels::get_parent_area();
		return view('area/form',$data);
	}
}