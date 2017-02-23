@extends('layout.layout')
@section('title')<title>Amount Setting</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>View Agent Details</h1>
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
            <div class="col-md-2 col-md-offset-10">
            <form action="agent-details" method="post" class="sidebar-form">
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <div class="input-group">
          <input type="text" name="agent_code" value="{{old('agent_code')}}" class="form-control" placeholder="Agent-Code"/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
            </form>
            </div>
            </div>

            <div class="col-md-12" style="background-color: #ffffff;">

                     
     
                <table class="table">
                    <thead>
                    <tr>
                        <th>Si No</th>
                        <th>Agent Name</th>
                        <th>Nominee's Name</th>
                        <th>Email</th>
                        <th>Agent Rank</th>
                        <th>Agent Code</th>
                        <th>Introducer Name</th>
                        <th>Introducer Code</th>
                        <th>Pan No.</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; ?>
					@foreach($user as $row)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$row->name_applicant}}</td>
                        <td>{{$row->nominee_name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->agent_rank}}</td>
                        <td>{{$row->agent_code}}</td>
                        <td>{{$row->introducer_name}}</td>
                        <td>{{$row->introducer_code}}</td>
                        <td>{{$row->pan_id}}</td>
						 <td>
						 <a href="set-status/{{$row->id}}">
						<?php if($row->status=='Active'){?>
							<kbd class="bg-green">{{$row->status}}</kbd>
							<?php }else{ ?>
							<kbd class="bg-red">{{$row->status}}</kbd>
							<?php } ?>
							</a>
						</td>
                    </tr>
					<?php $i++; ?>
					@endforeach
                    </tbody>
                </table>
				<div class="text-center">{!! str_replace('/?', '?', $user->render()) !!}</div>
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