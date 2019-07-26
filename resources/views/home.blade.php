@extends('layouts.admin_tmp')
@section('content')

<div class="row">
    <div class="col-md-3 portfolio-item"> 
        <div class="menu-item" style="height:150px;">
            <h1 class="page-header" style="color:#fcc;">Setting</h1>
        </div>  
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item blue" style="height:150px;">
            <a href="{{route('area')}}" data-toggle="modal">
                <i class="fa fa-building"></i>
                <p style="text-align:left;font-size:14px;padding-left:5px;">Area</p>
            </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item green" style="height:150px;">
            <a href="{{route('department')}}" data-toggle="modal">
                <i class="fa fa-briefcase"></i>
                <p style="text-align:left;font-size:14px;padding-left:5px;">Departement</p>
            </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item light-orange" style="height:150px;">
            <a href="{{route('device')}}" data-toggle="modal">
                <i class="fa fa-tasks"></i>
                <p style="text-align:left;font-size:14px;padding-left:5px;">Device</p>
            </a>
        </div> 
    </div>
   
</div>
<div class="row">
    <div class="col-md-3 portfolio-item">
        <div class="menu-item" style="height:150px;">
            <h1 class="page-header" style="color:#fcc;">Transaction</h1>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item light-orange" style="height:150px;">
            <a href="{{route('employee')}}" data-toggle="modal">
                    <i class="fa fa-users"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Employee</p>
                </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item red" style="height:150px;">
            <a href="{{route('visitor')}}" data-toggle="modal">
                    <i class="fa fa-user"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Visitor</p>
                </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item blue" style="height:150px;">
            <a href="{{route('contractor')}}" data-toggle="modal">
                    <i class="fa fa-users"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Contractor</p>
                </a>
        </div> 
    </div>
</div>





<div class="row">
    <div class="col-md-3 portfolio-item">
        <div class="menu-item" style="height:150px;">
            <h1 class="page-header" style="color:#fcc;">Reports</h1>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item purple" style="height:150px;">
            <a href="#" data-toggle="modal">
                    <i class="fa fa-shopping-cart"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Transaction</p>
                </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item red" style="height:150px;">
            <a href="#" data-toggle="modal">
                    <i class="fa fa-area-chart"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Counted</p>
                </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item blue" style="height:150px;">
            <a href="#" data-toggle="modal">
                    <i class="fa fa-bar-chart"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Not Counted</p>
                </a>
        </div> 
    </div>
    <div class="col-md-3 portfolio-item">
        <div class="menu-item" style="height:150px;">
            <h1 class="page-header" style="color:#fcc;">Monitoring</h1>
        </div> 
    </div>
    <div class="col-md-6 portfolio-item">
        <div class="menu-item green" style="height:150px;">
            <a href="{{route('monitoring')}}" data-toggle="modal">
                    <i class="fa fa-bar-chart"></i>
                    <p style="text-align:left;font-size:14px;padding-left:5px;">Normal</p>
                </a>
        </div> 
    </div>
</div>
<!-- Projects Row -->

@endsection
