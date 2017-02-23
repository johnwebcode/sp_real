@extends('layout.layout')
@section('title')<title>Parking List</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>List</h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!--  Line -->
        <div class="content-underline"></div>

        <section class="content" > <!-- Main content Start -->
            {{-- Success Alert--}}
            @if (Session::has('success'))
                <div class="flash_alert">
                    <h3 class="alert alert-success">{!! Session::get('success') !!}</h3>
                </div>
            @endif
            {{-- Success Alert--}}
            @if (Session::has('error'))
                <div class="flash_alert">
                    <h3 class="alert alert-error">{!! Session::get('error') !!}</h3>
                </div>
            @endif

            <div class="col-md-12" style="background-color: #ffffff;">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Si No</th>
                        <th>Name</th>
                        <th>Agent_Id</th>
                        <th>Mobile</th>
                        <th>Plot Name</th>
                        <th>Plot Area</th>
                        <th>Booking Date & Time</th>
                        <th>Cost</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					
					<?php $i=1; foreach($parking as $row){ ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['car_number']}}</td>
                        <td>{{$row['mobile']}}</td>
                        <td>{{$row['floor_name']}}</td>
                        <td>{{$row['project_area'].$row['slot_no']}}</td>
                        <td>{{date('d-m-y h:i:m a', strtotime($row['in_time']))}}</td>
                        <td>{{$row['cost']}}</td>
                        
                        <td>
							<?php if($row['status']==1){ ?>
							<a href="view-slot/{{$row['floor_id']}}/{{$row['slot_no']}}">
								<kbd class="bg-green">
									 <?php echo "Booking"; ?>
								</kbd>
							</a>
							<?php } else {  ?>
							<kbd class="bg-red">
								 <?php  echo "Booked";
								 } ?>
							</kbd>
						</td>
                    </tr>
					
					<?php $i++; } ?>

                    </tbody>
                </table>
				<div class="text-center">{!! str_replace('/?', '?', $park->render()) !!}</div>
            </div>

            <div class="row">
                <div class="col-sm-3 col-sm-offset-6 col-md-12 col-md-offset-0">
                </div>
                <div class="col-sm-3 col-md-12" id="showParkList">
                </div>
            </div>
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop