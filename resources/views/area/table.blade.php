@extends('layouts.admin_tmp')

@section('content')

<div class="bg_row">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a href="{{route('area_form')}}" class="btn btn-sm btn-success">
                    <span class="fa fa-plus"></span> Tambah Area
                </a>
                <a href="{{route('home')}}" class="btn btn-sm btn-danger">
                    <span class="fa fa-arrow-left"></span> Kembali
                </a>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12">                                
            <table id="mydata" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:10px">No</th>
                        <th>Area Name</th>
                        <th>Parent Area</th>
                        <th style="width:50px">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    <?php $no=1;?>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->area_name}}</td>    
                        <td>{{$row->parent}}</td>                      
                        <td style="text-align:right;">
                                <a href="javascript:edit({{$row->id}})" class="btn btn-info btn-sm" style="float: left;">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:deleted({{$row->id}})" class="btn btn-info btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                    </tr>
                    <?php $no++;?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit(sid){
        location.href="{{route('area_edit')}}?id="+sid;
    }
    function deleted(sid){       
      var url   = "{{route('delete') }}?id="+sid+"&table=tb_area&refresh=area";
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>



@endsection