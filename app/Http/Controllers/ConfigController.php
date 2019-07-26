<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigModels;
use App\Models\MenuModels;
use App\Models\SubMenuModels;
use Illuminate\Support\Facades\Validator;
use DB;
class ConfigController extends Controller
{

	public function delete()
	{
		return ConfigModels::delete_ok();
	}

	public function upload_file(Request $request)
	{
		return ConfigModels::upload_file_ok($request);
	}

	

	
}