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
                        <th>Project Name</th>
                        <th>Emi <table class="tablespm" ><th>Mly</th> <th>Qly</th> <th>Hly</th> <th>Yly</th> </table></th>
                        <th>Duration <table class="tablespm" ><th>Mly</th> <th>Qly</th> <th>Hly</th> <th>Yly</th> </table></th>
                        <th>Payable <table class="tablespm" ><th>Mly</th> <th>Qly</th> <th>Hly</th> <th>Yly</th> </table></th>
                        <th>Land Value <table class="tablespm" ><th>Mly</th> <th>Qly</th> <th>Hly</th> <th>Yly</th> </table></th>
                        <th>View Details</th>
                        
                    </tr>
                    </thead>
                    <tbody>
					
					<?php $i=1; foreach($sp_add_project as $row){ ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$row['prj_name']}}</td>
                        <td><table class="tablespm" ><td>{{$row['plan_a_emi_amount']}}</td> <td>{{$row['plan_b_emi_amount']}}</td> <td>{{$row['plan_c_emi_amount']}}</td> <td>{{$row['plan_d_emi_amount']}}</td> </table></td>
                        
                        <<td><table class="tablespm" ><td>{{$row['plan_a_total_duration']}}</td> <td>{{$row['plan_b_total_duration']}}</td> <td>{{$row['plan_c_total_duration']}}</td> <td>{{$row['plan_d_total_duration']}}</td> </table></td>
                        
                        <td><table class="tablespm" ><td>{{$row['plan_a_total_payable_amount']}}</td> <td>{{$row['plan_b_total_payable_amount']}}</td> <td>{{$row['plan_c_total_payable_amount']}}</td> <td>{{$row['plan_d_total_payable_amount']}}</td> </table></td>
                       
                       <td><table class="tablespm" ><td>{{$row['plan_a_total_benifit_amount']}}</td> <td>{{$row['plan_a_total_benifit_amount']}}</td> <td>{{$row['plan_a_total_benifit_amount']}}</td> <td>{{$row['plan_a_total_benifit_amount']}}</td> </table></td>
                        
                        
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