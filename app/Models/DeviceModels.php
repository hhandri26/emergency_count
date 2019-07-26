<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class DeviceModels extends Model
{
    public static function get_data(){
        $id 			= request()->id;
		if ($id>0){ $sql2="a.id=".$id;}else{$sql2="a.id>0";}		
		$data1 = DB::table('tb_device as a')
                ->select('a.id','a.serial_number','a.device_name','a.ip_address','a.gateway','a.area_id','a.user_qty','b.area_name')
                ->leftjoin('tb_area as b','a.area_id','=','b.id')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['id'] 			    = $row->id;
			$json_array['serial_number'] 	= $row->serial_number;
			$json_array['device_name'] 	    = $row->device_name;
            $json_array['ip_address'] 	    = $row->ip_address;
            $json_array['gateway'] 		    = $row->gateway;
			$json_array['area_id'] 	        = $row->area_id;
			$json_array['area_name'] 	    = $row->area_name;
			$json_array['user_qty'] 	    = $row->user_qty;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }

    public static function get_area(){
        return DB::table('tb_area')->select('*')->get();
    }

   

    public static function save_ok(){
        try{
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('tb_device')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'serial_number'	=>$val['serial_number'],
                                        'device_name'	=>$val['device_name'],
                                        'ip_address'	=>$val['ip_address'],
                                        'gateway'	    =>$val['gateway'],
                                        'area_id'	    =>$val['area_id'],
					 		  			'user_qty'	    =>$val['user_qty']
					 		  		]);
					$confirm1	=1;
					
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('tb_device')
					 		  ->insert([
                                        'serial_number'	=>$val['serial_number'],
                                        'device_name'	=>$val['device_name'],
                                        'ip_address'	=>$val['ip_address'],
                                        'gateway'	    =>$val['gateway'],
                                        'area_id'	    =>$val['area_id'],
                                        'user_qty'	    =>$val['user_qty']
					 		  		]);
					$confirm1	=1;
					
				}
            }
            
			if ($confirm1==1){
				$t_array['sid'] 		= $id;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('device');
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