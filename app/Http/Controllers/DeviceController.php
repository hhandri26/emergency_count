<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceModels;
use DB;
use App\User;

class DeviceController extends Controller
{
    public function index(){
        $data = DeviceModels::get_data();
		return view('device/table',compact('data'));
    }

    public function form(){
        $area = DeviceModels::get_area();
        return view('device/form',compact('area'));
    }

    public function add(){
        return DeviceModels::save_ok();
    }

    public function edit(){
        $data['area']    = DeviceModels::get_area();
        $data['get']    = DeviceModels::get_data();
		return view('device/form',$data);
	}
}