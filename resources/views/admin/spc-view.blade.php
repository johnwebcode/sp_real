@extends('layout.layout')
@section('title')<title>Parking List</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1> View SPC Project</h1>
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

          
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop