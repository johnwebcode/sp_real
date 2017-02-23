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

        
		

		<div class="row">
			<form class="form-horizontal" action="{{URL::to('plot-plan')}}" method="post" enctype="multipart/form-data" >
             <div class="col-md-6">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Name Of The Project Area: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('project_area')}}" placeholder="Name Of The Project Area: " name="project_area" id="psName">
						<span class="text-red">{{ $errors->first('project_area')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Buyer's Name: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('buyer_name')}}" placeholder="Buyer`s Name " name="buyer_name" id="buyer_name">
						<span class="text-red">{{ $errors->first('buyer_name')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Father's Name / Husband's Name: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('father_name')}}" placeholder="FATHER'S NAME / HUSBUND'S NAME " name="father_name" id="father_name">
						<span class="text-red">{{ $errors->first('father_name')}}</span>
					</div>
				</div>

				<div class="form-group">
                    <label class="col-sm-5 control-label">Date of Birth: </label>
                        <div class="col-sm-7">
                            <div class='input-group date' id='datetimepicker2'>
                                <input maxlength="10"  class="form-control" placeholder="Date of Birth" name="dob" id="dob">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                            </div>
                            <span class="text-red">{{ $errors->first('dob')}}</span>
                        </div>
                     </div>
                 
                 
                 
                 <div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Age : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('age')}}" placeholder="Age " name="age" id="age">
						<span class="text-red">{{ $errors->first('age')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Address : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('address')}}" placeholder="Address " name="address" id="address">
						<span class="text-red">{{ $errors->first('address')}}</span>
					</div>
				</div>

                  <div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Mobile No: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('mobile_no')}}" placeholder="Mobile No " name="mobile_no" id="mobile_no">
						<span class="text-red">{{ $errors->first('mobile_no')}}</span>
					</div>
				</div> 

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Landline No : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('landline_no')}}" placeholder="Landline No " name="landline_no" id="landline_no">
						<span class="text-red">{{ $errors->first('landline_no')}}</span>
					</div>
				</div>


                 <div class="form-group">
                        <label class="col-sm-5 control-label">Email :  </label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email...">
							<span class="text-red">{{ $errors->first('email')}}</span>
                        </div>
                    </div>

				<div class="form-group">
                        <label class="col-sm-5 control-label">Occupation</label>
                        <div class="col-sm-7">
                            Salaried<input type="radio" name="occupation" value="0" checked>
                            Employed<input type="radio" name="occupation" value="1">
                            <span class="text-red">{{ $errors->first('occupation')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
					<label class="col-sm-5 control-label">Nominee's Name : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('nominee_name')}}" placeholder="Nominee's Name " name="nominee_name" id="nominee_name">
						<span class="text-red">{{ $errors->first('nominee_name')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label">Nominee's Father's Name / Husband's Name: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('nominee_father_name')}}" placeholder="Nominee's Father's Name / Husband's Name" name="nominee_father_name" id="nominee_father_name">
						<span class="text-red">{{ $errors->first('nominee_father_name')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label">Relationship : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('relationship')}}" placeholder="Relationship" name="relationship" id="relationship">
						<span class="text-red">{{ $errors->first('relationship')}}</span>
					</div>
				</div>

				

                  
                  </div>

				<div class="col-md-6">

				<div class="form-group">
					<label class="col-sm-5 control-label">Nominee's Age : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('nominee_age')}}" placeholder="Nominee's Age" name="nominee_age" id="nominee_age">
						<span class="text-red">{{ $errors->first('nominee_ag')}}</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label">Nominee's Mobile No: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('nominee_mobile')}}" placeholder="Nominee's Mobile No " name="nominee_mobile" id="nominee_mobile">
						<span class="text-red">{{ $errors->first('nominee_mobile')}}</span>
					</div>
				</div> 

				<div class="form-group">
					<label class="col-sm-5 control-label">Nominee's Landline No : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('nominee_landline')}}" placeholder="Nominee's Landline No " name="nominee_landline" id="nominee_landline">
						<span class="text-red">{{ $errors->first('nominee_landline')}}</span>
					</div>
				</div>

                  <div class="form-group">
                        <label class="col-sm-5 control-label">Mode of scheme</label>
                        <div class="col-sm-7">
                            Cash Plot<input type="radio" name="mode_sheme" value="0" checked>
                            Installment<input type="radio" name="mode_sheme" value="1">
                            Monthly<input type="radio" name="mode_sheme" value="2">
                            <span class="text-red">{{ $errors->first('mode_sheme')}}</span>
                        </div>
                    </div>

                

                 <div class="form-group">
					<label class="col-sm-5 control-label">Project Name  : </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('project_name')}}" placeholder="Project Name" name="project_name" id="project_name">
						<span class="text-red">{{ $errors->first('project_name')}}</span>
					</div>
				</div>

				
                 
                 <div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Agent Code: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('agent_code')}}" placeholder="Agent Code" name="agent_code" id="agent_code">
						<span class="text-red">{{ $errors->first('agent_code')}}</span>
					</div>
				</div>

                 <div class="form-group">
					<label for="inputEmail3" class="col-sm-5 control-label">Agent Name: </label>
					<div class="col-sm-7">
						<input class="form-control" type="text" value="{{old('agent_name')}}" placeholder="Agent Name" name="agent_name" id="agent_name">
						<span class="text-red">{{ $errors->first('agent_name')}}</span>
					</div>
				</div>

				<div class="form-group parkOnly-hide">
					<label for="inputPassword3" class="col-sm-5 control-label">Image :</label>
					<div class="col-sm-7">
						<input  class="form-control" type="file"  name="image" >
						<span class="text-red">{{ $errors->first('image')}}</span>
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
				</div>
				</div>
				
			</form>
		</div>
	</section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
@stop	