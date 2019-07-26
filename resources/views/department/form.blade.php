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
                    <div class="col-md-12"><h4 class="box-title"> @if($id>0) Edit Department @else Form Tambah Department @endif</h4></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Nama Department</label>
                    <div class="col-sm-9">
                        <input  type="text" id="name"  class="form-control" value="@if($id>0){{ $get['name']}} @endif"/>
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
        a.name          = $('#name').val();
        var url         = "{{route('department_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }
</script>
@endsection