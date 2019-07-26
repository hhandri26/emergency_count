@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
    <a href="{{route('employee')}}" class="btn-floating btn-large" style="background-color: #FB0C03 ;color: #fff">
        <i style="font-size: 1.6em" class="fa  fa-arrow-circle-o-left "></i>
    </a>
</div>
<div class="bg_row">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12"><h4 class="box-title"> @if($id>0) Edit Visitor @else Form Tambah Visitor @endif</h4></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">ID Type</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="id_type">
                            @if($id>0)
                            <option value="$get['id_type']}}">{{$get['id_type']}}</option>
                            @endif
                            <option value="KTP">KTP</option>
                            <option value="SIM">SIM</option>
                            <option value="PASSPORT">PASSPORT</option>
                        </select>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Visitor ID</label>
                    <div class="col-sm-9">
                        <input  type="text" id="visitor_id"  class="form-control" value="@if($id>0){{ $get['visitor_id']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">name</label>
                    <div class="col-sm-9">
                        <input  type="text" id="name"  class="form-control" value="@if($id>0){{ $get['name']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Card Number</label>
                    <div class="col-sm-9">
                        <input  type="text" id="card_no"  class="form-control" value="@if($id>0){{ $get['card_no']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Birth Date</label>
                    <div class="col-sm-9">
                        <input  type="date" id="birth_date"  class="form-control" value="@if($id>0){{ $get['birth_date']}} @endif"/>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Company</label>
                    <div class="col-sm-9">
                        <input  type="text" id="company"  class="form-control" value="@if($id>0){{ $get['company']}} @endif"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Phone Number</label>
                    <div class="col-sm-9">
                        <input  type="text" id="phone"  class="form-control" value="@if($id>0){{ $get['phone']}} @endif"/>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Email</label>
                    <div class="col-sm-9">
                        <input  type="email" id="email"  class="form-control" value="@if($id>0){{ $get['email']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Address</label>
                    <div class="col-sm-9">
                        <textarea id="address" class="form-control">@if($id>0){{ $get['address']}} @endif</textarea>
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Induction Date</label>
                    <div class="col-sm-9">
                        <input  type="date" id="induction_date"  class="form-control" value="@if($id>0){{ $get['induction_date']}} @endif"/>
                    </div>
                </div>                 
            </form> 
        </div>
        <div class="col-lg-6">
            <form class="form-horizontal" >
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">ULI PIC</label>
                    <div class="col-sm-9">
                        <input  type="text" id="uli_pic"  class="form-control" value="@if($id>0){{ $get['uli_pic']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Company</label>
                    <div class="col-sm-9">
                        <input  type="text" id="company_pic"  class="form-control" value="@if($id>0){{ $get['company_pic']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Dept Name</label>
                    <div class="col-sm-9">
                        <input  type="text" id="dept_name"  class="form-control" value="@if($id>0){{ $get['dept_name']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Phone</label>
                    <div class="col-sm-9">
                        <input  type="text" id="phone_pic"  class="form-control" value="@if($id>0){{ $get['phone_pic']}} @endif"/>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Reason</label>
                    <div class="col-sm-9">
                        <input  type="text" id="reason"  class="form-control" value="@if($id>0){{ $get['reason']}} @endif"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
     function SaveWarning(){
        var id          ="{{$id}}";
        var a           = {};
        a.id_type       = $('#id_type').val();
        a.visitor_id    = $('#visitor_id').val();
        a.name          = $('#name').val();
        a.card_no       = $('#card_no').val();
        a.birth_date    = $('#birth_date').val();
        a.company       = $('#company').val();
        a.phone         = $('#phone').val();
        a.email         = $('#email').val();
        a.address       = $('#address').val();
        a.induction_date= $('#induction_date').val();
        a.uli_pic       = $('#uli_pic').val();
        a.company_pic   = $('#company_pic').val();
        a.dept_name     = $('#dept_name').val();
        a.phone_pic     = $('#phone_pic').val();
        a.reason        = $('#reason').val();
        var url         = "{{route('visitor_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }
</script>
@endsection