<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModels;
use DB;
use App\User;

class EmployeeController extends Controller
{
    public function index(){
        $data = EmployeeModels::get_data();
		return view('employee/table',compact('data'));
    }

    public function form(){
        $data['dept']   = EmployeeModels::get_dept();
        $data['company']= EmployeeModels::get_company();
        return view('employee/form',$data);
    }

    public function add(){
        return EmployeeModels::save_ok();
    }

    public function edit(){
        $data['get']    = EmployeeModels::get_data();
        $data['dept']   = EmployeeModels::get_dept();
        $data['company']= EmployeeModels::get_company();
		return view('employee/form',$data);
	}
}