@extends('layouts.admin_tmp')

@section('content')
<style>
    .panel-pricing {
        -moz-transition: all .3s ease;
        -o-transition: all .3s ease;
        -webkit-transition: all .3s ease;
    }
    .panel-pricing:hover {
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
    }
    .panel-pricing .panel-heading {
        padding: 20px 10px;
    }
    .panel-pricing .panel-heading .fa {
        margin-top: 10px;
        font-size: 58px;
    }
    .panel-pricing .list-group-item {
        color: #777777;
        border-bottom: 1px solid rgba(250, 250, 250, 0.5);
    }
    .panel-pricing .list-group-item:last-child {
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .panel-pricing .list-group-item:first-child {
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }
    .panel-pricing .panel-body {
        background-color: #f0f0f0;
        color: #777777;
        padding: 20px;
        margin: 0px;
    }
</style>
<section id="plans">
    <div class="container">
        <div class="row">

            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i>
                        <h3>Employee</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p style="font-size:80px"><strong>1</strong></p>
                    </div>
                   
                </div>
            </div>
            <!-- /item -->

            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-warning panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-user"></i>
                        <h3>Contractor</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p style="font-size:80px"><strong>1</strong></p>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i>
                        <h3>Visitor</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p style="font-size:80px"><strong>1</strong></p>
                    </div>
                </div>
            </div>
            <!-- /item -->
            <!-- row ke 2 -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <h3>Employee In</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Dept</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lini Wati</td>
                                    <td>Product Development</td>
                                    <td>8:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-warning panel-pricing">
                    <div class="panel-heading">
                        <h3>Contractor IN</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Yudha Gautama</td>
                                    <td>PT. Abc</td>
                                    <td>9:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <h3>Visitor In</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Handri</td>
                                    <td>PT. Transmeteatech</td>
                                    <td>10:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <h3>Employee Out</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Dept</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lini Wati</td>
                                    <td>Product Development</td>
                                    <td>15:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <!-- row ke 3 -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-warning panel-pricing">
                    <div class="panel-heading">
                        <h3>Contractor Out</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Yudha Gautama</td>
                                    <td>PT. Abc</td>
                                    <td>17:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->
            <!-- item -->
            <div class="col-md-4 col-sm-4 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <h3>Visitor Out</h3>
                    </div>
                    <div class="panel-body text-center">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Handri</td>
                                    <td>PT. Transmeteatech</td>
                                    <td>17:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /item -->

        </div>
    </div>
</section>
@endsection