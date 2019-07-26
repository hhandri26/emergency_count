<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceModels;
use DB;
use App\User;

class MonitoringController extends Controller
{
    public function index(){
		return view('monitoring');
    }
}