@extends('layout.layout')
@section('content')
<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
	<section class="content-header"><!-- Content Header (Page header) -->
		<h1>Plot Details</h1>
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
			<div class="flash_alert"><h3 class="alert alert-success">{!! Session::get('success') !!}</h3></div>
		@endif
		{{-- Error Alert--}}
		@if (Session::has('error'))
			<div class="flash_alert"><h3 class="alert alert-error">{!! Session::get('error') !!}</h3></div>
		@endif

		<div class="col-md-6">
			<form class="form-horizontal" action="{{URL::to('plot-plan')}}" method="post" enctype="multipart/form-data" >

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Project Name : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('name')}}" placeholder="Name..." name="name" id="psName">
						<span class="text-red">{{ $errors->first('project name')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Plot No. : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('car_number')}}" name="car_number" placeholder="Car Reg Number..." id="psCarNo">
						<span class="text-red">{{ $errors->first('plot No.')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Mobile : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('mobile')}}" name="mobile" placeholder="Mobile No..." id="psMobile">
						<span class="text-red">{{ $errors->first('mobile')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Park or Return : </label>
					<div class="col-sm-7">
						<input type="radio" value="1" name="type" checked > Park
						<input type="radio" value="2" name="type" disabled > Return
						<span class="text-red">{{ $errors->first('type')}}</span>
					</div>
				</div>

				<div class="form-group parkOnly-hide">
					<label for="inputPassword3" class="col-sm-3 control-label">Plot Image :</label>
					<div class="col-sm-7">
						<input  class="form-control" type="file"  name="image" >
						<span class="text-red">{{ $errors->first('image')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Plot Type : </label>
					<div class="col-sm-7">
						<select class="form-control" name="parking_type">
							<option value="">--Select--</option>
							<option value="1">Normal Car</option>
							<option value="2">Banker Car</option>
							<option value="3">Day Parking</option>
							<option value="4">Monthly Parking</option>
						</select>
						<span class="text-red">{{ $errors->first('parking_type')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">In Time : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{date('h:i:s a')}}"  disabled >
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Duration : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="" id="psDuration" disabled >
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-2" id="showImage"></div>
				</div>
				<div class="form-group ">
					<input type="submit" class="col-sm-offset-7 btn btn-success" value="Submit" />
					<input type="hidden" name="_token" id="psToken" value="{{ csrf_token() }}">
					<input type="hidden" name="floor_id" value="{{ $floor_id }}">
					<input type="hidden" name="slot_no" value="{{ $id }}">
				</div>
			</form>
		</div>
	</section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
@stop	