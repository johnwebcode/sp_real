@extends('layout.layout')
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1> Agent Form</h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!--  Line -->
       

       
               

 <div class="container">
  <div class="agency_form">
   <div class="row">
    <div class="col-md-12">
     <div class="well well-sm">
      
       <fieldset>
        <div class="row">
         <div class="col-md-4">
          <div class="logo">  <img src="{{ URL::asset('agentform/images/sp-logo.jpg')}}" /></div></div>
         <div class="col-md-8">
          <p class="reg_no">Govt.Regd.No:673/2016</p>
          <div class="head-right">
           <h6>SHRI PATHI REALTORS</h6>
           <div class="address">
            <p>203 J.S.P Complex, Near Guruvayurappan Temple, Uthukuli Main Road, Thirupur 641601. Cell : 98645 64943 , 98465 56485</p>
           </div>
          </div>
         </div>
        
        </div>
        <div class="app_form text-center">
         <h5>AGENCY APPLICATION FORM</h5> </div>
       </fieldset>
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
                    <h3 class="alert alert-error">{!! Session::get('errors') !!}</h3>
                </div>
            @endif
      <form class="form-horizontal" action="agent-form" method="post"> 
                  
      <div class="header-content">
       <ul>
        <li>
         <div class="form-group">
          <label class="col-sm-1">Agency Code:</label>
          <div class="code-text">
           <input type="text" name="agencycode" value="{{old('agencycode')}}" class="form-control">
              <span class="text-red">{{ $errors->first('agencycode')}}</span>
            </div>
         </div>
        </li>
        <li>
         <div class="form-group">
          <label class="col-sm-1">Rank: </label>
          <div class="code-text">
           <input type="text" name="rank" value="{{old('rank')}}" class="form-control">
            <span class="text-red">{{ $errors->first('rank')}}</span> </div>
         </div>
        </li>
        <li>
         <div class="form-group">
          <label class="col-sm-1">Date: </label>
          <div class="code-text">
           <input type="text" name="date" value="{{old('date')}}" class="form-control">
            <span class="text-red">{{ $errors->first('date')}}</span> </div>
         </div>
        </li>
       </ul>
      </div>
      <div class="agency_app">
       <div class="row">
        <div class="col-md-8">
         <div class="form-group">
          <label class="app_name">Name of Applicant : </label>
          <input type="text" name="nameapplicant" value="{{old('nameapplicant')}}" class="text-line form-control"> 
          <span class="text-red">{{ $errors->first('nameapplicant')}}</span>
          <span class="letter">(in Full & Block Letter)</span> </div>
         <div class="form-group">
          <label class="app_name">Father's/Husband's Name : </label>
          <input type="text" name="fhname" value="{{old('fhname')}}" class="text-line1 form-control">
           <span class="text-red">{{ $errors->first('fhname')}}</span> </div>

         <div class="form-group">
          <label class="app_name">Permanent Address : </label>
          <input type="text" name="address" value="{{old('address')}}" class="text-line2 form-control">
          <input type="text" name="address" value="{{old('address')}}" class="text-line3 form-control"> 
          <input type="text" name="address" value="{{old('address')}}" class="text-line4 form-control pull-left">
           <span class="text-red">{{ $errors->first('address')}}</span> </div> 
         <label class="app_name pin-number">Pin : </label>
         <div class="row-fluid">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
          <input class="Box productkey1" type="text" value="{{old('pin')}}" name="pin" maxlength="1">
           <span class="text-red">{{ $errors->first('pin')}}</span> </div>
        </div>
        <div class="col-md-4">
         <div class="photo-upload"></div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">Phone No : </label>
          <input type="text" class="text-line2 form-control" name="phone" value="{{old('phone')}}"> 
             <span class="text-red">{{ $errors->first('phone')}}</span>
          </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">Mobile : </label>
          <input type="text" name="mobile" class="text-line2 form-control" value="{{old('mobile')}}">
           <span class="text-red">{{ $errors->first('mobile')}}</span> </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-4" style="width: 32%; padding:0">
         <div class="text-detail form-group">
          <label class="dob">Date of Birth : </label>
          <input type="text" name="dob" class="text-line5 form-control" value="{{old('dob')}}">
           <span class="text-red">{{ $errors->first('dob')}}</span> </div>
        </div>
        <div class="col-md-4" style="width: 28%; padding:0">
         <div class="text-detail form-group">
          <label class="app_name">Age : </label>
          <input type="text" name="age" class="text-line5 form-control" value="{{old('age')}}"> 
           <span class="text-red">{{ $errors->first('age')}}</span></div>
        </div>
        <div class="col-md-4" style="width: 40%; padding:0">
         <div class="text-detail form-group">
          <label class="gender_name">Sex: Male/Female nationality </label>
          <input name="sex" type="text" class="text-line6 form-control" value="{{old('sex')}}"> 
           <span class="text-red">{{ $errors->first('sex')}}</span></div>
        </div>
       </div>
       <div class="form-group">
        <label class="app_name">PAN No : </label>
        <input type="text" name="pan" class="text-line7 form-control" value="{{old('pan')}}"> 
         <span class="text-red">{{ $errors->first('pan')}}</span></div>
       <div class="form-group">
        <label class="app_name">Nominee's Name : </label>
        <input type="text" name="nname" class="text-line8 form-control" value="{{old('nname')}}">
         <span class="text-red">{{ $errors->first('nname')}}</span> </div>
       <div class="row">
        <div class="col-md-4" style="width: 32%; padding:0">
         <div class="text-detail form-group">
          <label class="dob">Date of Birth : </label>
          <input type="text" name="ndob" class="text-line5 form-control" value="{{old('ndob')}}">
           <span class="text-red">{{ $errors->first('ndob')}}</span> </div>
        </div>
        <div class="col-md-4" style="width: 28%; padding:0">
         <div class="text-detail form-group">
          <label class="app_name">Age : </label>
          <input type="text" name=nage class="text-line5 form-control" value="{{old('nage')}}"> 
           <span class="text-red">{{ $errors->first('nage')}}</span></div>
        </div>
        <div class="col-md-4" style="width: 40%; padding:0">
         <div class="text-detail form-group">
          <label class="gender_name">Sex: M/F Relationship</label>
          <input type="text" name="nsex" class="text-line9 form-control" value="{{old('nsex')}}"> 
           <span class="text-red">{{ $errors->first('nsex')}}</span></div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">Name of Applicant : </label>
          <input type="text" name="noaname" class="text-line10 form-control" value="{{old('noaname')}}"> 
           <span class="text-red">{{ $errors->first('noaname')}}</span></div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">Signature of Applicant : </label>
          <input type="text" class="text-line11 form-control"> </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-4">
         <div class="text-detail form-group">
          <label class="app_name">Rank : </label>
          <input type="text" name="nrank" class="text-line12 form-control" value="{{old('nrank')}}">
           <span class="text-red">{{ $errors->first('nrank')}}</span> </div>
        </div>
        <div class="col-md-8">
         <div class="text-detail form-group">
          <label class="app_name">Code : </label>
          <input type="text" name="ncode" class="text-line8 form-control" value="{{old('ncode')}}">
           <span class="text-red">{{ $errors->first('ncode')}}</span> </div>
        </div>
       </div>
      </div>
      <div class="agency_app1">
       <ul>
        <li>
         <div class="form-group">
          <label class="holder-name">6. SR UNIT Manager </label>
          <input type="text" name="sum" class="text-line13 form-control" value="{{old('sum')}}"> 
           <span class="text-red">{{ $errors->first('sum')}}</span></div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">5. UNIT Manager </label>
          <input type="text" name="um" class="text-line8 form-control" value="{{old('um')}}"> 
           <span class="text-red">{{ $errors->first('um')}}</span></div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">4. Senior Coordinator </label>
          <input type="text" name="sm" class="text-line14 form-control" value="{{old('sm')}}"> 
           <span class="text-red">{{ $errors->first('sm')}}</span></div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">3. Coordinator </label>
          <input type="text" name="co" class="text-line15 form-control" value="{{old('co')}}">
           <span class="text-red">{{ $errors->first('co')}}</span> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">2. Senior Advisor </label>
          <input type="text" name="sa" class="text-line8 form-control" value="{{old('sa')}}"> 
           <span class="text-red">{{ $errors->first('sa')}}</span></div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">1. Advisor </label>
          <input type="text" name="ad" class="text-line16 form-control" value="{{old('ad')}}">
           <span class="text-red">{{ $errors->first('ad')}}</span> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">Full Chain of Unit No </label>
          <input type="text" name="fcun" class="text-line14 form-control" value="{{old('fcun')}}"> 
           <span class="text-red">{{ $errors->first('fcun')}}</span></div>
        </li>
       </ul>
      </div>
      <div class="row">
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Name of Agent : </label>
         <input type="text" name="noa" class="text-line10 form-control" value="{{old('noa')}}">
          <span class="text-red">{{ $errors->first('noa')}}</span> </div>
       </div>
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Signature of Agent : </label>
         <input type="text" class="text-line11 form-control" > </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-4" style="width: 38%;">
        <div class="text-detail form-group">
         <label class="app_name">Agent Code : </label>
         <input type="text" name="acode" class="text-line5 form-control" value="{{old('acode')}}"> 
          <span class="text-red">{{ $errors->first('acode')}}</span></div>
       </div>
       <div class="col-md-4" style="
    padding: 0;
    width: 28%;
">
        <div class="text-detail form-group">
         <label class="app_name">Rank : </label>
         <input type="text" name="arank" class="text-line5 form-control" value="{{old('arank')}}"> 
          <span class="text-red">{{ $errors->first('arank')}}</span></div>
       </div>
       <div class="col-md-4" style="
    padding: 0;
    width: 34%;
">
        <div class="text-detail form-group">
         <label class="app_name">Date : </label>
         <input type="text" name="adate" class="text-line10 form-control" value="{{old('adate')}}">
          <span class="text-red">{{ $errors->first('adate')}}</span> </div>
       </div>
      </div>
      <div class="name_app pull-left">
       <label class="app_name">Name of Applicant</label>
      </div>
      <div class="sign_app pull-right">
       <label class="app_name">Signature of Applicant </label>
      </div>

      <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Register">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}" id=""></input>
                        </div>
                    </div>
                     </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
    
    
    

        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop



  <script type="text/javascript">
  $(document).ready(function () {
   $('.Box').on("keyup", function (e) {
    var $input = $(this);
    if ($input.val().length == 0 && e.which == 8) {
     $input.toggleClass("productkey2 productkey1").prev('.Box').focus();
    }
    else if ($input.val().length >= parseInt($input.attr("maxlength"), 10)) {
     $input.toggleClass("productkey1 productkey2").next('.Box').focus();
    }
   });
  });
 </script>