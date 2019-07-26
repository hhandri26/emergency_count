<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContractorModels;
use DB;
use App\User;

class ContractorController extends Controller
{
    public function index(){
        $data = ContractorModels::get_data();
		return view('contractor/table',compact('data'));
    }

    public function form(){
        return view('contractor/form');
    }

    public function add(){
        return ContractorModels::save_ok();
    }

    public function edit(){
        $data['get']    = ContractorModels::get_data();
		return view('contractor/form',$data);
	}
}