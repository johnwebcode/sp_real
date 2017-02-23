@extends('layout.layout')
@section('title')<title>Admin Dashboard</title>@stop
@section('content')
<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <section class="content-header"><!-- Content Header (Page header) -->
        <h1>Plot Details</h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
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
        {{-- Error Alert--}}
        @if (Session::has('error'))
        <div class="flash_alert">
            <h3 class="alert alert-error">{!! Session::get('error') !!}</h3>
        </div>
        @endif

        <div class="col-md-6">
            {{--Error Message Start--}}
            @if ($errors->all())
            <div style="background-color: #ffffff; color: #f00000;" class="alert">
                <a href="#" style="text-decoration: none;" class="close" data-dismiss="alert">&times;</a>
                <h4 style="margin: 4px 0 10px 0px;">Error Message</h4>
                @foreach ($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign text-red"></span>
                <span style="margin-left: 7px;text-transform: capitalize;">{{ $error }}</span><br>
                @endforeach
            </div>
            @endif
            {{--End Error Message--}}
				
            <form class="form-horizontal" action="{{URL::to('pay-bill')}}" method="POST" >
				<input type="hidden" name="id" value="{{$ParkingDetails['id']}}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label"> Plot Name : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" value="{{$ParkingDetails['name']}}" disabled name="name" placeholder="Plot Name" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Plot Code : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" value="{{$ParkingDetails['car_number']}}" disabled name="car_number" placeholder="Plot Code..." />
                    </div>

                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Agent Mobile Number : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                       <input class="form-control" type="text" value="{{$ParkingDetails['mobile']}}" disabled name="mobile" placeholder="Agent Mobile Number..." />
                    </div>
                </div>
				<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">
						type
						<span class="required-must">*</span>
						</label>
						<div class="col-sm-9">
							<input type="radio" value="1" name="type" disabled /> Installment
							<input type="radio" value="2" name="type" checked /> Full Payment
							
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Installment period : <span class="required-must">*</span></label>
						<div class="col-sm-9">
							<input class="form-control" type="text" disabled value="{{date('d-m-Y h:i:s', strtotime($ParkingDetails['in_time']))}}" name="in_time" placeholder="Installment period" />
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Date & Time : <span class="required-must">*</span></label>
						<div class="col-sm-9">
							<input class="form-control" type="text" disabled value="{{$out_time}}" name="out_time" placeholder="Date & Time" />
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Total Cost : <span class="required-must">*</span></label>
						<div class="col-sm-9">
							<input class="form-control" type="text" readonly value="{{$cost}}" name="cost" placeholder="Total Cost " />
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Plot Image <span class="required-must">*</span></label>
						<div class="col-sm-9">
							<img src="{{ URL::asset('images/upload/'.$ParkingDetails['image'])}}" width="100px" height="100px"> 
						</div>
					</div>
				
                <div class="form-group">
                    <div class="col-sm-offset-8 col-sm-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <a href="{{url::to('parking')}}" class="btn btn-danger">Cancel</a>
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    </div>
                </div>
            </form>
        </div>
    </section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
@stop

