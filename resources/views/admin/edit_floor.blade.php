@extends('layout.layout')
@section('title')<title>Admin Dashboard</title>@stop
@section('content')
<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <section class="content-header"><!-- Content Header (Page header) -->
        <h1>Create New Floor</h1>
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
            {!! Form::model($floorDetails, ['method' => 'PATCH', 'class' => 'form-horizontal', 'route' => ['floor.update', $floorDetails['id']] ]) !!}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Floor Name : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'maxlength'=>'10']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Nick Name : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::input('text', 'short_name', null, ['class' => 'form-control', 'maxlength'=>'10']) !!}
                    </div>

                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">No.of Lot : <span class="required-must">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::input('text', 'number', null, ['class' => 'form-control', 'maxlength'=>'3']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-8 col-sm-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <a href="{{url::to('floor-details')}}" class="btn btn-danger">Cancel</a>
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                    </div>
                </div>
            </form>
        </div>
    </section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
@stop

