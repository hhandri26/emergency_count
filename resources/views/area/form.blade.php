@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
    <a href="{{route('area')}}" class="btn-floating btn-large" style="background-color: #FB0C03 ;color: #fff">
        <i style="font-size: 1.6em" class="fa  fa-arrow-circle-o-left "></i>
    </a>
</div>
<div class="bg_row">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12"><h4 class="box-title"> @if($id>0) Edit Area @else Form Tambah Area @endif</h4></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Nama Area</label>
                    <div class="col-sm-9">
                        <input  type="text" id="area_name"  class="form-control" value="@if($id>0){{ $get['area_name']}} @endif"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label1">Parent Area</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="id_parent_area">
                            @if($id>0)
                                <option value="{{ $get['id_parent_area']}}">{{$get['parent']}}</option>
                            @endif
                            @foreach ($parent as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                            
                        </select>
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
        a.area_name     = $('#area_name').val();
        a.id_parent_area= $('#id_parent_area').val();
        var url         = "{{route('area_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }
</script>
@endsection