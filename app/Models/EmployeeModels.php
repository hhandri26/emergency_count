<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class EmployeeModels extends Model
{
    public static function get_data(){
        $id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('tb_employee')
                ->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
            $json_array['id'] 			    = $row->id;
            $json_array['name'] 			= $row->name;
			$json_array['personel_id'] 	    = $row->personel_id;
			$json_array['card_no'] 	        = $row->card_no;
            $json_array['company'] 	        = $row->company;
            $json_array['dept'] 			= $row->dept;
			$json_array['phone'] 	        = $row->phone;
			$json_array['email'] 	        = $row->email;
            $json_array['address'] 	        = $row->address;
            $json_array['birth_date'] 		= $row->birth_date;
			$json_array['hired_date'] 	    = $row->hired_date;
			$json_array['resign_date'] 	    = $row->resign_date;
			$json_array['block'] 	        = $row->block;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }

    public static function get_dept(){
        return DB::table('tb_department')
                ->select('*')
				->get();

    }
    public static function get_company(){
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
					$update = DB::table('tb_employee')
					 		  ->where('id',$id)
					 		  ->update([
                                            'personel_id'	=>$val['personel_id'],
                                            'name'	        =>$val['name'],
                                            'card_no'	    =>$val['card_no'],
                                            'company'		=>$val['company'],
                                            'dept'	        =>$val['dept'],
                                            'phone'			=>$val['phone'],
                                            'email'	        =>$val['email'],
                                            'address'		=>$val['address'],
                                            'birth_date'	=>$val['birth_date'],
                                            'hired_date'	=>$val['hired_date'],
                                            'resign_date'	=>$val['resign_date'],
                                            'block'	        =>$val['block']
					 		  		]);
					$confirm1	=1;
					
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('tb_employee')
					 		  ->insert([
                                        'personel_id'	=>$val['personel_id'],
                                        'name'	        =>$val['name'],
                                        'card_no'	    =>$val['card_no'],
                                        'company'		=>$val['company'],
                                        'dept'	        =>$val['dept'],
                                        'phone'			=>$val['phone'],
                                        'email'	        =>$val['email'],
                                        'address'		=>$val['address'],
                                        'birth_date'	=>$val['birth_date'],
                                        'hired_date'	=>$val['hired_date'],
                                        'resign_date'	=>$val['resign_date'],
                                        'block'	        =>$val['block']
					 		  		]);
					$confirm1	=1;
					
				}
            }
            
			if ($confirm1==1){
				$t_array['sid'] 		= $id;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('employee');
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