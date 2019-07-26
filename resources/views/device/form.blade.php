@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
    <a href="{{route('department')}}" class="btn-floating btn-large" style="background-color: #FB0C03 ;color: #fff">
        <i style="font-size: 1.6em" class="fa  fa-arrow-circle-o-left "></i>
    </a>
</div>
<div class="bg_row">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12"><h4 class="box-title"> @if($id>0) Edit Devie @else Form Tambah Device @endif</h4></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Serial Number</label>
                    <div class="col-sm-9">
                        <input  type="text" id="serial_number"  class="form-control" value="@if($id>0){{ $get['serial_number']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Nama Device</label>
                    <div class="col-sm-9">
                        <input  type="text" id="device_name"  class="form-control" value="@if($id>0){{ $get['device_name']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">IP Address</label>
                    <div class="col-sm-9">
                        <input  type="text" id="ip_address"  class="form-control" value="@if($id>0){{ $get['ip_address']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Gateway</label>
                    <div class="col-sm-9">
                        <input  type="text" id="gateway"  class="form-control" value="@if($id>0){{ $get['gateway']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Area</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="area_id">
                            @if($id>0)
                                <option value="{{$get['area_id']}}">{{$get['area_name']}}</option>
                            @endif
                            @foreach ($area as $row)
                                <option value="{{$row->id}}">{{$row->area_name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">User Qty</label>
                    <div class="col-sm-9">
                        <input  type="text" id="user_qty"  class="form-control" value="@if($id>0){{ $get['user_qty']}} @endif"/>
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
        a.serial_number = $('#serial_number').val();
        a.device_name   = $('#device_name').val();
        a.ip_address    = $('#ip_address').val();
        a.gateway       = $('#gateway').val();
        a.area_id       = $('#area_id').val();
        a.user_qty      = $('#user_qty').val();
        var url         = "{{route('device_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }
</script>
@endsection