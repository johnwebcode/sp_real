@extends('layout.layout')
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1> Booking Land Form</h1>
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


<body>
 <div class="container">
  <div class="land_booking_form">
   <div class="row">
    <div class="col-md-12">
     <div class="well well-sm">
      
       <fieldset>

        <div class="top_header">
         <div class="row">
          <div class="col-md-8">
           <div class="row">
            <div class="col-md-6">
             <div class="logo"> <img src="{{ URL::asset('agentform/images/sp-logo.jpg')}}" /></div>
            </div>
            <div class="col-md-6">
             <div class="land_booking_heading">
              <h6>SRI PATHI REALTORS</h6> </div>
             <div class="address">
              <p>203 J.S.P Complex, Near Guruvayurappan Temple, Uthukuli Main Road, Thirupur 641601. Cell : 98645 64943 , 98465 56485 </p>
             </div>
            </div>
           </div>
           <div class="form-group">
            <label class="col-sm-4 land_booking_det1"> NAME OF THE PROJECT AREA : </label>
            <div class="code-text">
             <input type="text" class="form-control"> </div>
           </div>
          </div>
          <div class="col-md-4">
           <div class="row">
            <div class="col-md-12">
             <div class="sub_head">
              <p class="pull-right">Govt.Regd.No:1124/2015</p>
             </div>
             <div class="photo pull-right"> </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </fieldset>
    <form class="form-horizontal" method="post" action="store" > 
      <div class="top_app_form1">
       <h1 class="text-center">LAND BOOKING APPLICATION FORM</h1>
       <h3 class="side_head">APPLICANT'S DETAIL</h3>
       <div class="form-group">
        <label class="app_name">BUYER'S NAME </label>
        <input type="text" name="name" class="text-line form-control"> </div>
       <div class="form-group">
        <label class="app_name">FATHER'S NAME / HUSBUND'S NAME </label>
        <input type="text" name="fhname" class="text-line1 form-control"> </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">DATE OF BIRTH </label>
          <input type="text" name="dob" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">AGE </label>
          <input type="text" name="age" class="text-line form-control"> </div>
        </div>
       </div>
       <div class="form-group">
        <label class="app_name">ADDRESS </label>
        <input type="text" name="address" class="text-line3 form-control">
        <input type="text" name="address" class="text-line4 form-control"> </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">MOBILE NO </label>
          <input type="text" name="mob" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">LAND LINE NO </label>
          <input type="text" name="lln" class="text-line1 form-control"> </div>
        </div>
       </div>
       <div class="form-group">
        <label class="app_name">E-MAIL ID </label>
        <input type="text" name="email" class="text-line3 form-control"> </div>
       <div class="row">
        <div class="col-md-2">
         <label class="app_name">OCCUPATION </label>
        </div>
        <div class="col-md-10">
         <div class="row">
          <div class="occupation">
           <div class="col-md-3">
            <div class="funkyradio">
             <div class="funkyradio-default">
              <input type="radio" name="occupation" id="radio1">
              <label for="radio1">SALARIED</label>
             </div>
            </div>
           </div>
           <div class="col-md-9">
            <div class="funkyradio1">
             <div class="funkyradio-primary">
              <input type="radio" name="occupation" id="radio2" checked="">
              <label for="radio2">SELF EMPLOYED</label>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
    
      <div class="top_app_form2">
       <h3 class="side_head">NOMINEE'S DETAIL</h3>
       <div class="form-group">
        <label class="app_name">NOMINEE'S NAME </label>
        <input type="text" name="nname" class="text-line5 form-control"> </div>
       <div class="form-group">
        <label class="app_name">FATHER'S NAME / HUSBUND'S NAME </label>
        <input type="text" name="nfhname" class="text-line1 form-control"> </div>
       <div class="row">
        <div class="col-md-8">
         <div class="form-group">
          <label class="app_name">RELATIONSHIP </label>
          <input type="text" name="relationship" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
          <label class="app_name">AGE </label>
          <input type="text" name="nage" class="text-line6 form-control"> </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label class="app_name">MOBILE NO </label>
          <input type="text" name="nmob" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label class="app_name">LANDLINE NO </label>
          <input type="text" name="nln" class="text-line1 form-control"> </div>
        </div>
       </div>
      </div>
      <div class="top_app_form3">
       <h3 class="side_head">MODE OF SCHEME</h3>
       <div class="row">
        <div class="col-md-6">
         <div class="checkbox">
          <input type="checkbox" name="scheme_mode" value="option1">
          <label> CASH PLOT </label>
         </div>
        </div>
        <div class="col-md-6">
         <div class="row">
          <div class="col-md-5">
           <div class="checkbox">
            <input type="checkbox" name="scheme_mode" value="option1">
            <label> INSTALLMENT </label>
           </div>
          </div>
          <div class="col-md-4">
           <div class="checkbox">
            <input type="checkbox" name="scheme_mode" value="option1">
            <label> Mly. </label>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="row">
          <div class="col-md-3">
           <label class="app_name pin-number">PLOT NO : </label>
          </div>
          <div class="col-md-6">
           <div class="row-fluid">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1">
            <input class="Box productkey1" type="text" name="plotno" maxlength="1"> </div>
          </div>
         </div>
         <div class="mode_scheme">
          <ul>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det">Total Amount : </label>
             <div class="code-text1">
              <input type="text" name="tot_amount" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Advance Paid Amount :</label>
             <div class="code-text2">
              <input type="text" name="apa" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det">Balance Amount :</label>
             <div class="code-text1">
              <input type="text" name="balanceamount" class="form-control"> </div>
            </div>
           </li>
          </ul>
         </div>
        </div>
        <div class="col-md-6">
         <div class="plot_detail">
          <ul>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Years :</label>
             <div class="code-text2">
              <input type="text" name="yr" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Total Amount :</label>
             <div class="code-text2">
              <input type="text" name="totalamount" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Advance Amount :</label>
             <div class="code-text2">
              <input type="text" name="adv_amount" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Balance Amount :</label>
             <div class="code-text2">
              <input type="text" name="bal_amount" class="form-control"> </div>
            </div>
           </li>
           <li>
            <div class="form-group">
             <label class="col-sm-4 mode_det1">Installment Amount :</label>
             <div class="code-text2">
              <input type="text" name="ins_amount" class="form-control"> </div>
            </div>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
      <div class="top_app_form4">
       <label class="sign_app pull-right">AGENT SIGNATURE </label>
       <div class="top_heading">
        <h3 class="side_heading">PROPERTY BOOKING DETAILS (OFFICE USE) </h3> </div>
       <div class="form-group">
        <label class="app_name">PROJECT NAME </label>
        <input type="text" name="pname" class="text-line5 form-control"> </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">LOCATION </label>
          <input type="text" name="loc" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">CITY </label>
          <input type="text" name="city" class="text-line7 form-control"> </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">VILLAGE </label>
          <input type="text" name="village" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">TALUK </label>
          <input type="text" name="taluk" class="text-line8 form-control"> </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">DISTRICT </label>
          <input type="text" name="district" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">LAND REGISTER OFFICE </label>
          <input type="text" name="lro" class="text-line9 form-control"> </div>
        </div>
       </div>
       <div class="booking_date">
        <label class="app_name">DATE </label>
        <input type="text" name="date" class="text-line10 form-control"> </div>
      </div>
      <div class="top_app_form5">
       <label class="sign_app pull-right">CUSTOMER SIGNATURE </label>
       <div class="top_heading">
        <h3 class="side_head1">INTRODUCER'S DETAILS </h3> </div>
       <div class="row">
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">AGENT CODE </label>
          <input type="text" name="acode" class="text-line2 form-control"> </div>
        </div>
        <div class="col-md-6">
         <div class="text-detail form-group">
          <label class="app_name">AGENT NAME </label>
          <input type="text" name="aname" class="text-line1 form-control"> </div>
        </div>
       </div>
        <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Register">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}" id=""></input>
                        </div>
                    </div>
            </div>
                </form>     
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 

</div>
  </section><!-- Main content Emd -->
</div><!-- /.content-wrapper -->
</body>
@stop









 
 

  
