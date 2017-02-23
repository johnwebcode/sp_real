@extends('layout.layout')
@section('title')<title>Add SPM Project</title>@stop
@section('content')

  


<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <section class="content-header"><!-- Content Header (Page header) -->
        <h1>Plan Booking B</h1>
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
             <div class="col-md-12">
       

       
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
          

      <!-- Add Content --><form class="form-horizontal" action="spmstore" method="post">
                    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">

                        <div class="row">
                       <div class="col-md-6">
                       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Aggrement No1 : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_aggrement_no')}}" id="aggrement_no" name="plan_aggrement_no" placeholder="Aggrement No">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Booking ID : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_booking_id')}}" id="booking_id" name="plan_booking_id" placeholder="Booking ID">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Start-Date : </label>
                    <div class="col-sm-7">

                        <input class="form-control "  maxlength="20" type="text" value="13/02/2015"  id="start_date" name="plan_start_date" placeholder="Start-Date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">End-Date : </label>
                    <div class="col-sm-7">
                        <input class="form-control datepicker"  maxlength="20" type="text" value="15/02/2015" id="end_date" name="plan_end_date" placeholder="End-Date">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Name : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="30" type="text" value="{{old('plan_buyer_name')}}" id="buyer_name" name="plan_buyer_name" placeholder="Buyer Name">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Father/Husband Name : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_Fat_hus_name')}}" id="Fat_hus_name" name="plan_Fat_hus_name" placeholder="Father/Husband Name">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">DOB Buyer : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_a_D.O.B_Buyer')}}" id="DOB_Buyer" name="plan_DOB_Buyer" placeholder="DOB Buyer">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Age : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_buyer_age')}}" id="buyer_age" name="plan_buyer_age" placeholder="Buyer Age">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Address : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="50" type="text" value="{{old('plan_buyer_address')}}" id="buyer_address" name="plan_buyer_address" placeholder="Buyer Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Mobile : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_buyer_mobile')}}" id="buyer_mobile" name="plan_buyer_mobile" placeholder="Buyer Mobile">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Landline : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_buyer_landline')}}" id="buyer_landline" name="plan_buyer_landline" placeholder="Buyer Landline">
                    </div>
                </div>
                
                       </div>

                        <div class="col-md-6">
                        <div class="form-group">

                        <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Email : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_buyer_email')}}" id="buyer_email" name="plan_buyer_email" placeholder="Buyer Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Buyer Occupation : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_buyer_occupation')}}" id="buyer_occupation" name="plan_buyer_occupation" placeholder="Buyer Occupation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Nominee Name : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="30" type="text" value="{{old('plan_nom_name')}}" id="nom_name" name="plan_nom_name" placeholder="Nominee Name">
                    </div>
                </div>

                    <label for="inputPassword3" class="col-sm-5 control-label">Father/Husband Name : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="30" type="text" value="{{old('plan_nom_f_h_name')}}" id="nom_f_h_name" name="plan_nom_f_h_name" placeholder="Father/Husband Name">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Relationship : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_nom_relationship')}}" id="nom_relationship" name="plan_nom_relationship" placeholder="Relationship">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Nominee Mobile : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_nom_mobile')}}" id="nom_mobile" name="plan_nom_mobile" placeholder="Nominee Mobile">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Landline No : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_landline_no')}}" id="landline_no" name="plan_landline_no" placeholder="Landline No">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Nominee Age : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_nom_age')}}" id="nom_age" name="plan_nom_age" placeholder="Nominee Age">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Land value </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_land_value')}}" id="plan_land_value" name="plan_land_value" placeholder="Land value">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Advance : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_advance')}}" id="advance" name="plan_advance" placeholder="Advance">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Balance : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_balance')}}" id="balance" name="plan_balance" placeholder="Balance">
                    </div>
                </div>

                </div> </div>
                
                 <div class="content-underline"></div>

                 <div class="row">
                 <div class="col-md-6">

                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 Name  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="30" type="text" value="{{old('plan_agent_name')}}" id="agent_name" name="plan_agent_name" placeholder="Agent Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 Address  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="50" type="text" value="{{old('plan_agent_address')}}" id="agent_address" name="plan_agent_address" placeholder="Agent Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 code  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent_code')}}" id="agent_code" name="plan_agent_code" placeholder="Agent code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 commision : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent_commision')}}" id="agent_commision" name="plan_agent_commision" placeholder="Agent commision">
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 TDS  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent_tds')}}" id="agent_tds" name="plan_agent_tds" placeholder="Agent TDS">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-1 Number  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent_no')}}" id="agent_no" name="plan_agent_no" placeholder="Agent Number">
                    </div>
                </div>
            
                <
                       
                       </div> 


                       <div class="col-md-6">

                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 Name  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent2_name')}}" id="agent2_name" name="plan_agent2_name" placeholder="Agent-2 Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 Address  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="50" type="text" value="{{old('plan_agent2_address')}}" id="agent2_address" name="plan_agent2_address" placeholder="Agent-2 Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 code  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent2_code')}}" id="agent2_code" name="plan_agent2_code" placeholder="Agent-2 code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 commision : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent2_commision')}}" id="agent_2commision" name="plan_agent2_commision" placeholder="Agent-2 commision">
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 TDS  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent2_tds')}}" id="agent2_tds" name="plan_agent2_tds" placeholder="Agent-2 TDS">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent-2 Number  : </label>
                    <div class="col-sm-7">
                        <input class="form-control "  maxlength="20" type="text" value="{{old('plan_agent2_no')}}" id="agent2_no" name="plan_agent2_no" placeholder="Agent-2 Number">
                    </div>
                </div>
            
                <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Book">
                        </div>
                    </div>
                       
                       </div> 








                       </div>

 




    <!-- end Content -->

        
        </div>
        </div>
       
        <form class="form-horizontal" action="store" method="post">
                    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">
    </section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
<!--<input id="StartDate" type="text"  name="StartDate">
<input id="EndDate" class="datepicker" type="text"  name="EndDate">-->

           
   
@stop


