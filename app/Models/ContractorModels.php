<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ContractorModels extends Model
{
    public static function get_data(){
        $id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('tb_contractor')
                ->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
            $json_array['id'] 			    = $row->id;
            $json_array['name'] 			= $row->name;
            $json_array['id_type'] 			= $row->id_type;
			$json_array['visitor_id'] 	    = $row->visitor_id;
            $json_array['card_no'] 	        = $row->card_no;
            $json_array['birth_date'] 		= $row->birth_date;
            $json_array['company'] 	        = $row->company;
			$json_array['phone'] 	        = $row->phone;
			$json_array['email'] 	        = $row->email;
            $json_array['address'] 	        = $row->address;
            $json_array['induction_date'] 	= $row->induction_date;
			$json_array['uli_pic'] 	        = $row->uli_pic;
			$json_array['company_pic'] 	    = $row->company_pic;
            $json_array['dept_name'] 	    = $row->dept_name;
            $json_array['phone_pic'] 	    = $row->phone_pic;
            $json_array['reason'] 	        = $row->reason;
			
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
  

    public static function save_ok(){
        try{
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('tb_contractor')
					 		  ->where('id',$id)
					 		  ->update([
                                            'id_type'       =>$val['id_type'],
                                            'visitor_id'	=>$val['visitor_id'],
                                            'name'	        =>$val['name'],
                                            'card_no'	    =>$val['card_no'],
                                            'birth_date'	=>$val['birth_date'],
                                            'company'	    =>$val['company'],
                                            'phone'			=>$val['phone'],
                                            'email'	        =>$val['email'],
                                            'address'		=>$val['address'],
                                            'induction_date'=>$val['induction_date'],
                                            'uli_pic'   	=>$val['uli_pic'],
                                            'company_pic'	=>$val['company_pic'],
                                            'dept_name'	    =>$val['dept_name'],
                                            'phone_pic' 	=>$val['phone_pic'],
                                            'reason'	    =>$val['reason']
					 		  		]);
					$confirm1	=1;
					
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('tb_contractor')
					 		  ->insert([
                                        'id_type'       =>$val['id_type'],
                                        'visitor_id'	=>$val['visitor_id'],
                                        'name'	        =>$val['name'],
                                        'card_no'	    =>$val['card_no'],
                                        'birth_date'	=>$val['birth_date'],
                                        'company'	    =>$val['company'],
                                        'phone'			=>$val['phone'],
                                        'email'	        =>$val['email'],
                                        'address'		=>$val['address'],
                                        'induction_date'=>$val['induction_date'],
                                        'uli_pic'   	=>$val['uli_pic'],
                                        'company_pic'	=>$val['company_pic'],
                                        'dept_name'	    =>$val['dept_name'],
                                        'phone_pic' 	=>$val['phone_pic'],
                                        'reason'	    =>$val['reason']
					 		  		]);
					$confirm1	=1;
					
				}
            }
            
			if ($confirm1==1){
				$t_array['sid'] 		= $id;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('contractor');
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