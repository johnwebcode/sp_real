@extends('layout.layout')
@section('title')<title>View SPM Project</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>View SPM Project</h1>
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

            <div class="col-md-12" style="background-color:#ffffff;">
                <table class="tablespm">
                    <thead>
                    <tr>
                        <th>Si No</th>
                        <th>Agreement No.</th>
                        <th>Agent Code</th>
                        <th>Plot Buyer Name </th>
                        <th>Address </th>
                        <th>Nominee Name </th>
                        <th>Plot Value</th>
                        <th>Balance</th>
                        <th>Advance</th>
                        <th>Print</th>
                        <th>View Details</th>
                        
                    </tr>
                    </thead>
                    <tbody>
					
					<?php $i=1; foreach($spm_plan as $row){ ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td> {{$row['plan_aggrement_no']}}</td>
                        <td>{{$row['plan_agent_code']}} </td>
                        <td> {{$row['plan_buyer_name']}}</td>
                        <td>{{$row['plan_buyer_address']}} </td>
                        <td> {{$row['plan_nom_name']}}</td>
                        <td> {{$row['plan_land_value']}}</td>
                        <td> {{$row['plan_balance']}}</td>
                        <td> {{$row['plan_advance']}}</td>
                        
                        <td>
                                <a href="<?php echo 'pdfview/'. $row->id ?>" ><kbd class="bg-green"><?php  echo "Print";
                                  ?>  
                            </kbd></a>
                        </td>
                        <td>
                        
						 <a href="<?php echo 'spm-view-more/'. $row->id ?>" ><kbd class="bg-green"><?php  echo "View More";
								  ?>  
							</kbd></a>
						</td>
                    </tr>
					
					<?php $i++; } ?>

                    </tbody>
                </table>
				
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