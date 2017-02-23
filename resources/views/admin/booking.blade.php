@extends('layout.layout')
@section('title')<title>Plot Site</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Select Plot</h1>
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

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Plot :  </label>
                        <div class="col-sm-9">
							<input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">
                            <select class="form-control" name="floor_id" id="chooseFloor">
                                <option value="">Choose a Plot</option>
                                 @foreach($floors as $floor)
                                    <option value='{{$floor->id}}'>{{$floor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-sm-3 col-sm-offset-6 col-md-12 col-md-offset-0">
                </div>
                <div class="col-sm-3 col-md-12" id="showParkList">
                  <img src="{{ URL::asset('dist/img/siteplan.jpg')}}" alt="Plot Site Plan" style="width:100%; height:100%; "/>
                </div>
            </div>
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop