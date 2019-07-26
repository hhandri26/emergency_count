<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class AreaModels extends Model
{
    public static function get_area(){
        $id 			= request()->id;
		if ($id>0){ $sql2="a.id=".$id;}else{$sql2="a.id>0";}		
		$data1 = DB::table('tb_area as a')
                ->select('a.id','a.area_name','a.id_parent_area','b.name as parent')
                ->leftjoin('tb_area_parent as b','a.id_parent_area','=','b.id')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['id'] 			    = $row->id;
			$json_array['area_name'] 	    = $row->area_name;
			$json_array['id_parent_area'] 	= $row->id_parent_area;
			$json_array['parent'] 	        = $row->parent;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }

    public static function get_parent_area(){
        return DB::table('tb_area_parent')
                ->select('*')
				->get();

    }

    public static function save_ok(){
        try{
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('tb_area')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'area_name'			=>$val['area_name'],
					 		  			'id_parent_area'	=>$val['id_parent_area']
					 		  		]);
					$confirm1	=1;
					
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('tb_area')
					 		  ->insert([
                                        'area_name'			=>$val['area_name'],
                                        'id_parent_area'	=>$val['id_parent_area']
					 		  		]);
					$confirm1	=1;
					
				}
            }
            
			if ($confirm1==1){
				$t_array['sid'] 		= $id;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('area');
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