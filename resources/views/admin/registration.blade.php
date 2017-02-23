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
            <div class="row">
            
                <form class="form-horizontal" action="new-agent" method="post">
                    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-5 control-label" >Name of Applicant :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="name_applicant" value="{{old('name_applicant')}}"  placeholder="Name of Applicant">
                                          <span class="text-red">{{ $errors->first('name_applicant')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Father's/Husband's Name :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="father_husband_name" value="{{old('father_husband_name')}}" placeholder="Father's/Husband's Name">
                                          <span class="text-red">{{ $errors->first('father_husband_name')}}</span>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="col-sm-5 control-label">Gender :  </label>
                        <div class="col-sm-7">
                            Not Say<input type="radio" name="gender" value="0" checked>
                            Male<input type="radio" name="gender" value="1">
                            Female<input type="radio" name="gender" value="2">
                                          <span class="text-red">{{ $errors->first('gender')}}</span>
                        </div>
                    </div>

                    
                 

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Email :  </label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email...">
                                          <span class="text-red">{{ $errors->first('email')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Password :  </label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="password" placeholder="Password...">
                                          <span class="text-red">{{ $errors->first('password')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-5 control-label">Date of Birth : </label>
                        <div class="col-sm-7">
                            <div class='input-group date' id='datetimepicker1'>
                                <input maxlength="10"  class="form-control" placeholder="DD/MM/YYYY" name="dob" id="dob">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                            </div>
                            <span class="text-red">{{ $errors->first('dob')}}</span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Age :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="age" id="age" value="{{old('age')}}" placeholder="Age">
                            <span class="text-red">{{ $errors->first('age')}}</span>
                        </div>
                    </div>


        

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Pan No. : </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pan_id" value="{{old('pan_id')}}" placeholder="Pan No.">
                                          <span class="text-red">{{ $errors->first('pan_id')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Mobile : </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" placeholder="Mobile">
                            <span class="text-red">{{ $errors->first('mobile')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Phone : </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Phone">
                            <span class="text-red">{{ $errors->first('phone')}}</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Permenent Address :  </label>
                        <div class="col-sm-7">
                            <input type="text-area" class="form-control" name="permenent_address" value="{{old('permenent_address')}}" placeholder="Permenent address">
                            <span class="text-red">{{ $errors->first('permenent_address')}}</span>
                        </div>
                    </div>
                       
                       <div class="form-group">
                        <label class="col-sm-5 control-label">Pincode :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pincode" value="{{old('pincode')}}" placeholder="postal code">
                            <span class="text-red">{{ $errors->first('pincode')}}</span>
                        </div>
                    </div>      

                   </div>
                   <div class="col-md-6">

                     


                     <div class="form-group">
                        <label class="col-sm-5 control-label">Project Assign :  </label>
                        <div class="col-sm-7">
                                           <input id="ms" class="form-control" name="floor[]"/>
                                    </div>
                              </div>      


                    <div class="form-group">
                        <label class="col-sm-5 control-label">Nominees Name :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nominee_name" value="{{old('nominee_name')}}" placeholder="Nominee's Name">
                            <span class="text-red">{{ $errors->first('nominee_name')}}</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Nominees Date of Birth :  </label>
                         <div class="col-sm-7">
                            <div class='input-group date' id='datetimepicker3'>
                                <input maxlength="10"  class="form-control" placeholder="DD/MM/YYYY" name="nominee_dob" id="nominee_dob">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                            </div>
                            <span class="text-red">{{ $errors->first('nominee_dob')}}</span>
                        </div>
                    </div>
                     
                     <div class="form-group">
                        <label class="col-sm-5 control-label">Nominees Age :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nominee_age" value="{{old('nominee_age')}}" placeholder="Nominee's Age">
                            <span class="text-red">{{ $errors->first('nominee_age')}}</span>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="col-sm-5 control-label">Nominees Gender :  </label>
                        <div class="col-sm-7">
                            Not Say<input type="radio" name="nominee_gender" value="0" checked>
                            Male<input type="radio" name="nominee_gender" value="1">
                            Female<input type="radio" name="nominee_gender" value="2">
                            <span class="text-red">{{ $errors->first('nominee_gender')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Agent Role :  </label>
                        <div class="col-sm-7">
                            <select class="form-control" name="agent_role" id="agent_role" placeholder="...">                       
                                  <option value="">Choose Agent Role</option>
                                  <option value="0">SR UNIT Manager</option>
                                   <option value="1">UNIT Manager</option>
                                   <option value="2">Senior Coordinator </option>
                                   <option value="3">Coordinator</option>
                                   <option value="4">Senior Advisor</option>
                                   <option value="5">Advisor</option>
                            </select>  
                            <span class="text-red">{{ $errors->first('agent_role')}}</span>
                        </div>
                    </div>

                    <div class="form-group">

                        <label class="col-sm-5 control-label">Agent Code :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="agent_code" id="agent_code" value="{{old('agent_code')}}" placeholder="Agent Code">
                            <span class="text-red">{{ $errors->first('agent_code')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Agent Rank :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="agent_rank" value="{{old('agent_rank')}}" placeholder="Agent Rank">
                            <span class="text-red">{{ $errors->first('agent_rank')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Name of Introducer :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="introducer_name" value="{{old('introducer_name')}}" placeholder="Name of Introducer">
                            <span class="text-red">{{ $errors->first('introducer_name')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Introducer code :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="introducer_code" value="{{old('introducer_code')}}" placeholder="Name of Introducer">
                            <span class="text-red">{{ $errors->first('introducer_code')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Introducer Rank :  </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="introducer_rank" value="{{old('introducer_rank')}}" placeholder="Name of Introducer">
                            <span class="text-red">{{ $errors->first('introducer_rank')}}</span>
                        </div>
                    </div>

                    <div class="form-group parkOnly-hide">
                    <label for="inputPassword3" class="col-sm-5 control-label">Agent Image :</label>
                    <div class="col-sm-7">
                        <input  class="form-control" type="file"  name="image" >
                        <span class="text-red">{{ $errors->first('image')}}</span>
                    </div>
                </div>

                    
             <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" onclick="clickCounter()" value="Register">
                        </div>
                    </div>



                   </div>
                </form>
            </div>
            </div>
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop