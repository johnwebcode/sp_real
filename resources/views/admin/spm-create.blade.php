@extends('layout.layout')
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Create New Agent</h1>
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


             <form class="form-horizontal" action="store" method="post">
                    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">
            <div class="row">
            
               

                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Name :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prj_name" value="{{old('prj_name')}}" placeholder="Project Name">
                                          <span class="text-red">{{ $errors->first('prj_name')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Description :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prj_des" value="{{old('prj_des')}}" placeholder="Project Description">
                                          <span class="text-red">{{ $errors->first('prj_des')}}</span>
                        </div>
                    </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Project ID :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prj_id" value="{{old('prj_id')}}" placeholder="Project ID">
                                          <span class="text-red">{{ $errors->first('prj_id')}}</span>
                        </div>
                    </div>
                 </div>
                 </div>

                 <div class="row">

                 <div class="col-md-6" >

                 <h3>Monthly EMI Plan</h3>

                          <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="a_emi_amount" name="plan_a_emi_amount" onkeyup="sum();" value="{{old('plan_a_emi_amount')}}"  placeholder="EMI  Amount...">
                                          <span class="text-red">{{ $errors->first('plan_a_emi_amount')}}</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_a_total_duration" onkeyup="sum1();" value="{{old('plan_a_total_duration')}}" id="a_total_duration"  placeholder="Total Dutration...">
                                          <span class="text-red">{{ $errors->first('plan_a_total_duration')}}</span>

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <select class="form-control"  name="plan_a_emi_month" id="a_emi_month"  onchange="sum();"  placeholder="EMI Month...">                       
                                  <option value="">Choose Month</option>
                                  <option value="1">1 Month</option>
                            </select>  
                            <span class="text-red">{{ $errors->first('plan_a_emi_month')}}</span>
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_a_no_of_emi"  value="{{old('plan_a_no_of_emi')}}"   id="a_no_of_emi" placeholder="No. of EMI...">
                                          <span class="text-red">{{ $errors->first('plan_a_no_of_emi')}}</span>
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_a_total_payable_amount"  id="a_total_payable_amount" value="{{old('plan_a_total_payable_amount')}}" placeholder="Total Amount...">
                                          <span class="text-red">{{ $errors->first('plan_a_total_payable_amount')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_a_total_benifit_amount" value="{{old('plan_a_total_benifit_amount')}}" placeholder="Land Value...">
                                          <span class="text-red">{{ $errors->first('plan_a_total_benifit_amount')}}</span>
                        </div>
                    </div>



                  </div>

                  <div class="col-md-6">

                  <h3>quarterly EMI Plan</h3>

                  <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="b_emi_amount" name="plan_b_emi_amount"  onkeyup="sumb();" value="{{old('plan_b_emi_amount')}}" placeholder="EMI  Amount...">
                                          <span class="text-red">{{ $errors->first('plan_b_emi_amount')}}</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="b_total_duration" onkeyup="sumb1();" name="plan_b_total_duration" value="{{old('plan_b_total_duration')}}" placeholder="Total Dutration...">
                                          <span class="text-red">{{ $errors->first('plan_b_total_duration')}}</span>

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <select class="form-control" name="plan_b_emi_month" id="b_emi_month" onchange="sumb();" placeholder="EMI Month...">                       
                                  <option value="">Choose Month</option>
                                  <option value="3">3 Month</option>
                            </select>  
                            <span class="text-red">{{ $errors->first('plan_b_emi_month')}}</span>
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_b_no_of_emi" id="b_no_of_emi" value="{{old('plan_b_no_of_emi')}}" placeholder="No. of EMI...">
                                          <span class="text-red">{{ $errors->first('plan_b_no_of_emi')}}</span>
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_b_total_payable_amount" id="b_total_payable_amount" value="{{old('plan_b_total_payable_amount')}}" placeholder="Total Amount...">
                                          <span class="text-red">{{ $errors->first('plan_b_total_payable_amount')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_b_total_benifit_amount" value="{{old('plan_b_total_benifit_amount')}}" placeholder="Land Value...">
                                          <span class="text-red">{{ $errors->first('plan_b_total_benifit_amount')}}</span>
                        </div>
                    </div>

                  </div>
                  </div>  




                 <div class="row">

                 <div class="col-md-6">

                 <h3>Halfly EMI Plan</h3>

                          <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="c_emi_amount" name="plan_c_emi_amount" onkeyup="sumc();" value="{{old('plan_c_emi_amount')}}" placeholder="EMI  Amount...">
                                          <span class="text-red">{{ $errors->first('plan_c_emi_amount')}}</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="c_total_duration" name="plan_c_total_duration" onkeyup="sumc1();" value="{{old('plan_c_total_duration')}}" placeholder="Total Dutration...">
                                          <span class="text-red">{{ $errors->first('plan_c_total_duration')}}</span>

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <select class="form-control" name="plan_c_emi_month" id="c_emi_month" onchange="sumc();" placeholder="EMI Month...">                       
                                  <option value="">Choose Month</option>
                                  <option value="6">6 Month</option>
                            </select>  
                            <span class="text-red">{{ $errors->first('plan_c_emi_month')}}</span>
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_c_no_of_emi" id="c_no_of_emi" value="{{old('plan_c_no_of_emi')}}" placeholder="No. of EMI...">
                                          <span class="text-red">{{ $errors->first('plan_c_no_of_emi')}}</span>
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="c_total_payable_amount" name="plan_c_total_payable_amount" value="{{old('plan_c_total_payable_amount')}}" placeholder="Total Amount...">
                                          <span class="text-red">{{ $errors->first('plan_c_total_payable_amount')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_c_total_benifit_amount" value="{{old('plan_c_total_benifit_amount')}}" placeholder="Land Value...">
                                          <span class="text-red">{{ $errors->first('plan_c_total_benifit_amount')}}</span>
                        </div>
                    </div>



                  </div>

                  <div class="col-md-6">

                  <h3>Yearly EMI Plan</h3>

                  <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_d_emi_amount" id="d_emi_amount" onkeyup="sumd();" value="{{old('plan_d_emi_amount')}}" placeholder="EMI  Amount...">
                                          <span class="text-red">{{ $errors->first('plan_d_emi_amount')}}</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_d_total_duration" id="d_total_duration" onkeyup="sumd1();" value="{{old('plan_d_total_duration')}}" placeholder="Total Dutration...">
                                          <span class="text-red">{{ $errors->first('plan_d_total_duration')}}</span>

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <select class="form-control" name="plan_d_emi_month" id="d_emi_month" onchange="sumd();" placeholder="EMI Month...">                       
                                  <option value="">Choose Month</option>
                                  <option value="12">12 Month</option>
                            </select>  
                            <span class="text-red">{{ $errors->first('plan_d_emi_month')}}</span>
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_d_no_of_emi" id="d_no_of_emi" value="{{old('plan_d_no_of_emi')}}" placeholder="No. of EMI...">
                                          <span class="text-red">{{ $errors->first('plan_d_no_of_emi')}}</span>
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="d_total_payable_amount" name="plan_d_total_payable_amount" value="{{old('plan_d_total_payable_amount')}}" placeholder="Total Amount...">
                                          <span class="text-red">{{ $errors->first('plan_d_total_payable_amount')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="plan_d_total_benifit_amount" value="{{old('plan_d_total_benifit_amount')}}" placeholder="Land Value...">
                                          <span class="text-red">{{ $errors->first('plan_d_total_benifit_amount')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Register">
                        </div>
                    </div>



                  </div>
                  </div> </form> 
</section>
                   </div>
                
           
            
        <!-- Main content Emd -->
        </div>
   <!-- /.content-wrapper -->
@stop