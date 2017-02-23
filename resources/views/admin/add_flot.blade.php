@extends('layout.layout')
@section('title')<title>Add Project</title>@stop
@section('content')

<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <section class="content-header"><!-- Content Header (Page header) -->
        <h1>Add Project</h1>
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

        <div class="row">

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
            <form class="form-horizontal" action="floor" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Project Name : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="10" type="text" value="{{old('name')}}" name="name" placeholder="Project Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Project area : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="10" type="text" value="{{old('project_area')}}" name="project_area" placeholder="Project area">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">No.of plot : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('number')}}" name="number" placeholder="Ex: 1-100">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Location : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('location')}}" name="location" placeholder="Location">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">City : <span class="required-must"></span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('city')}}" name="city" placeholder="City">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Village : <span class="required-must"></span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('village')}}" name="village" placeholder="Village">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Taluk : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('taluk')}}" name="taluk" placeholder="Taluk">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">District : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('district')}}" name="district" placeholder="District">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Land Register Office : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        <input class="form-control " maxlength="3" type="text" value="{{old('land_register_office')}}" name="land_register_office" placeholder="Land Register Office">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-9 col-sm-3">
                        <input class="btn btn-primary" type="submit" value="Add Project">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
@stop

