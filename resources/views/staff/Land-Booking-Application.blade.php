@extends('layout.layout')
@section('title')<title>Amount Setting</title>@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{('css/form.css')}}" />
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <div class = "panel panel-default">
   <div class = "panel-body" style="border-style: solid; border-color: #00a65a; ">
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Land-Booking-Application</h1>
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
            

            <div class="row" style="background-color: #ffffff;">

                <div class="col-sm-2">

          <img src="{{ URL::asset('dist/img/realtors.png')}}"  alt="User Image" />
               </div>
               <div class="col-sm-10">
            <h3><p class="head1">SP-REALTORS</p></h3></br>
            <h5><p class="heads">203 J.S.P Complex, Near Gruvayurappan Template,</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Uthukuli Main Road, Thirupur 641 601,</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cell : 96298 44641, 94869 88047</p></h5></br></br></br>
                         
                  </div>
                   
                     </div>
                         <h4><p class="heada">Agency Application Form</p></h4></br>    

            <form class="form-horizontal" action="{{URL::to('pay-bill')}}" method="POST" >

                <table class="table" style=" border: 3px solid black; border-color: #00a65a">
                    <thead>
                    <tr>
                        <th>Agency Code <input class="text-line6" type="text" id="agencycode" name="agencycode" value=""  placeholder="AgencyCode" /></th>
                        <th>Rate <input class="text-line6" type="text" id="rate" name="rate" value=""  placeholder="Rate" /></th>
                        <th>Date <input class="text-line6" type="text" id="date" name="date" value=""  placeholder="Date" /></th>
                        
                    </tr>
                    </thead>
                    
                </table>
                <div class="row">
                <div class="col-sm-10">
                <div class="form-group">
                    <label for="name"  control-label">Name of Applicant : </br>(Full & Block Letter) <span class="required-must">*</span></label>
                    
                        <input class="text-line1" type="text" id="applicantname" name="applicantname"  value=""  placeholder="Applicant Name..." />

                        </div>
                      <div class="form-group">
                    <label for="F\H name"  control-label">Fathers \ Husband's name : <span class="required-must">*</span></label>
                    
                        <input class="text-line2" type="text" name="fathername" id="fathername" value=""  placeholder="Applicant Name..." />
                       </div>

                        <div class="form-group">
                    <label for="p/adress"  control-label">Permanent Address : <span class="required-must">*</span></label>
                      
                        <input class="text-line3" type="text" id="permanentaddress" name="permanentaddress" value=""  placeholder="Applicant Name..." />
                         <input class="text-line4" type="text" id="permanentaddress" name="permanentaddress" value=""  />
                         <input class="text-line5" type="text" id="permanentaddress" name="permanentaddress" value="" />
                         
        <label class="app_name pin-number">Pin : </label>
        <div class="row-fluid">
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
         <div class="span3">
          <input type="text" class="input-block-level" id="pin" name="pin"> </div>
        </div>
                         
                        </div>
                  
                </div>
                 <div class="col-sm-2">
                          <textarea name="message" rows="8" cols="20" style="padding-top: 11px"></textarea>
                 
                  </div>
                  <div class="row">
                  <div class="col-sm-10">
                    <div class="form-group">
                   <div class="pull-left">
                        <label for="p/adress"  control-label">Phone No. : <span class="required-must">*</span></label>
                        <input class="text-line" type="text" id="phonenum" name="phonenum" value=""  placeholder="Applicant Name..." />
                           </div>
                           <div class="pull-right">
                        <label for="p/adress"  control-label">Mobile : <span class="required-must">*</span></label>
                        <input class="text-line" type="text" id="mob" name="mob" value=""  placeholder="Applicant Name..." />
                          </div>
                          </div>
                       </div>
                   </div>
                   </div>
            
</form>
        </section><!-- Main content Emd -->
    </div>
    </div>
    </div><!-- /.content-wrapper -->
@stop