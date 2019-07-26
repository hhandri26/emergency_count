<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class DepartmentModels extends Model
{
    public static function get_data(){
        $id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('tb_department')
                ->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['id']   = $row->id;
			$json_array['name'] = $row->name;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }


    public static function save_ok(){
        try{
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('tb_department')
					 		  ->where('id',$id)
					 		  ->update(['name'=>$val['name']]);
					$confirm1	=1;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('tb_department')
					 		  ->insert(['name'=>$val['name']]);
					$confirm1	=1;
					
				}
            }
            
			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('department');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}

    }
}