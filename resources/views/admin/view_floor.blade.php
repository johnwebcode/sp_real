@extends('layout.layout')
@section('title')<title>Admin Dashboard</title>@stop
@section('content')
<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <section class="content-header"><!-- Content Header (Page header) -->
        <h1>View project Details</h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!--  Line -->
    <div class="content-underline"></div>

    <section class="content" ><!-- Main content Start -->
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

        <div class="container">

            <div class="centered" style="height:auto; width:95%;  background-color: #FFFFFF;    padding-bottom: 5px;"><!--Return Back Car Details Start -->
                <table class="table table-condensed"  >
					<?php if(count($floor)==0){ echo "No Data Found."; }else{ ?>
                    <thead>
                    <tr class="text-center">
                        <th>Project Name</th>
                        <th>Project Area</th>
                        <th>Total Plot</th>
                        <th>Created</th>
                        <th>Last Updated</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>

                    <tbody >
					
					
                    @foreach($floor as $row)
                        <tr id="tr_id_4" class="tr-class-6">
                            <td id="td_id_1" class="td-class-4">{{$row->name}}</td>
                            <td id="td_id_1" class="td-class-4">{{$row->project_area}}</td>
                            <td id="td_id_1" class="td-class-4">{{$row->number}}</td>
                            <td id="td_id_1" class="td-class-4">{{date('d-M-Y', strtotime($row->created_at))}}</td>
                            <td id="td_id_1" class="td-class-4">{{date('d-M-Y', strtotime($row->updated_at))}}</td>

                            <td id="td_id_1" class="td-class-4 text-center">
                                {{--<a data-method="delete" class="btn btn-xs btn-success" href="{{ URL::to('edit_floor/{{$row->id}})" >--}}
                                <a data-method="delete" class="btn btn-xs btn-success" href="edit-floor?id={{$row->id}}" >
                                    <i class="glyphicon glyphicon-refresh" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"></i>
                                </a>
                               <a data-method="delete" class="btn btn-xs btn-danger" onclick="$(this).find(&quot;form&quot;).submit();">
                                    <i class="fa fa-trash" data-toggle="tooltip" data-placement="left" title="" data-original-title="Delete"></i>
                                    <form action="floor/{{$row->id}}" method="POST" style="display:none;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                                    </form>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
								<?php } ?>
                </table>
                <div class="text-center">{!! str_replace('/?', '?', $floor->render()) !!}</div>
                {{--{{ str_replace('/?', '?', $floor->render()) }}--}}
            </div><!--Return Back Car Details End -->

        </div>
    </section><!-- Main content End -->
</div><!-- /.content-wrapper -->
@stop
