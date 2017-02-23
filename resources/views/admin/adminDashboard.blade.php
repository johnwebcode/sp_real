@extends('layout.layout')
@section('title')<title>{{$title}}</title>@stop

@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>{{$title}}</h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!--  Line -->
        <div class="content-underline"></div>
        <section class="content" >
            {{-- Success Alert--}}
            @if (Session::has('success'))
                <div class="col-md-12 flash_alert">
                    <h4 class="alert alert-success text-center ">{!! Session::get('success') !!}</h4>
                </div>
            @endif
            {{-- Success Alert--}}
            @if (Session::has('error'))
                <div class="col-md-12 flash_alert">
                    <h4 class="alert alert-error">{!! Session::get('error') !!}</h4>
                </div>
            @endif

        </section>
    </div>
@stop
