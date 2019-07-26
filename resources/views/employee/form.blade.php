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
                    <div class="col-md-12"><h4 class="box-title"> @if($id>0) Edit Employee @else Form Tambah Employee @endif</h4></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Personel ID</label>
                    <div class="col-sm-9">
                        <input  type="text" id="personel_id"  class="form-control" value="@if($id>0){{ $get['personel_id']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Name</label>
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
                    <label for="title" class="col-sm-3 control-label1">Company</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="company">
                            @if($id>0)
                                <option value="{{ $get['company']}}">{{$get['company']}}</option>
                            @endif
                            @foreach ($company as $row)
                                <option value="{{$row->name}}">{{$row->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Dept Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="dept">
                            @if($id>0)
                                <option value="{{ $get['dept']}}">{{$get['dept']}}</option>
                            @endif
                            @foreach ($dept as $row)
                                <option value="{{$row->name}}">{{$row->name}}</option>
                            @endforeach
                            
                        </select>
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
                    <label for="title" class="col-sm-3 control-label1">Birth Date</label>
                    <div class="col-sm-9">
                        <input  type="date" id="birth_date"  class="form-control" value="@if($id>0){{ $get['birth_date']}} @endif"/>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Hired Date</label>
                    <div class="col-sm-9">
                        <input  type="date" id="hired_date"  class="form-control" value="@if($id>0){{ $get['hired_date']}} @endif"/>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Resign Date</label>
                    <div class="col-sm-9">
                        <input  type="date" id="resign_date"  class="form-control" value="@if($id>0){{ $get['resign_date']}} @endif"/>
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
        a.personel_id   = $('#personel_id').val();
        a.name          = $('#name').val();
        a.card_no       = $('#card_no').val();
        a.company       = $('#company').val();
        a.dept          = $('#dept').val();
        a.phone         = $('#phone').val();
        a.email         = $('#email').val();
        a.address       = $('#address').val();
        a.birth_date    = $('#birth_date').val();
        a.hired_date    = $('#hired_date').val();
        a.resign_date   = $('#resign_date').val();
        a.block         = '';
        var url         = "{{route('employee_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }
</script>
@endsection