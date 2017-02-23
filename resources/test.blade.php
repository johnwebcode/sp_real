<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Agency-form</title>
 <!-- Bootstrap -->

 <link rel="stylesheet" href="jquery-ui-1.12.0.custom/jquery-ui.css">
 <script src="jss/jquery-3.1.0.js"></script>
 <script src="jquery-ui-1.12.0.custom/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <script src="js/jquery-3.1.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
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
 <style>
  @import 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
  * {
   margin: 0;
   padding: 0;
  }
  
  .container {
   margin-left: auto;
   margin-right: auto;
  }
  
  .well {
   background-color: white;
   border: 2px solid #00a65a;
   margin-top: 30px;
   padding-bottom: 70px;
  }
  
  .agency_form .logo {
   padding-left: 65px;
   padding-top: 25px;
  }
  
  .header-content li {
   text-decoration: none;
   list-style-type: none;
   display: inline-block;
   width: 33%;
   border-right: 2px solid #00a65a;
  }
  
  .header-content li:last-child {
   border-right: none;
  }
  
  .header-content ul {
   border: 2px solid #00a65a;
  }
  
  .agency_app {
   border-bottom: 2px solid #00a65a;
   padding-bottom: 20px;
  }
  
  .head-right {
   text-align: center;
   width: 52%;
  }
  
  .reg_no {
   font-size: 20px;
   color: #00a65a;
   float: right;
  }
  
  .head-right h6 {
   font-size: 30px;
   color: #00a65a;
  }
  
  .address p {
   font-size: 18px;
   color: #00a65a;
  }
  
  .app_form h5 {
   background-color: #00a65a;
   color: white;
   width: 22%;
   margin-left: auto;
   margin-right: auto;
   padding: 5px 5px;
   border-radius: 5px;
  }
  
  .code-text .form-control {
   width: 71%;
   margin-left: auto;
   margin-right: auto;
   margin-top: 10px;
   border: 1px solid #fff;
  }
  
  label {
   color: #00a65a;
  }
  
  .text-line {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 75%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .app_name {
   padding-left: 18px;
  }
  
  .letter {
   padding-left: 18px;
   color: #00a65a;
  }
  
  .text-line1 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 68%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .text-line2 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 73%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .text-line3 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 96%;
   display: inline-block;
   margin-left: 25px;
   margin-top: 20px;
  }
  
  .text-line4 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 90%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .Box:focus {
   border: thin solid #FFD633;
   -webkit-box-shadow: 0px 0px 3px #F7BB2E;
   -moz-box-shadow: 0px 0px 3px #F7BB2E;
   box-shadow: 0px 0px 3px #F7BB2E;
  }
  
  .Box {
   height: 30px;
   width: 43px;
   text-align: justify;
   letter-spacing: 5px;
   padding: 10px;
  }
  
  .row-fluid {
   display: flex;
   /* width: 24%; */
   margin-left: auto;
   margin-right: auto;
   /* margin-top: 20px; */
   position: absolute;
   top: 10px;
   left: 72px;
  }
  
  .row-fluid input[type="text"] {
   border-color: #00a65a;
   padding: 5px 3px;
  }
  
  .pin-number {
   padding-top: 20px;
   position: relative;
  }
  
  .photo-upload {
   border: 2px solid #00a65a;
   width: 52%;
   height: 220px;
   margin-left: auto;
   margin-right: auto;
  }
  
  .text-detail {
   padding-top: 20px;
  }
  
  .dob {
   padding-left: 30px;
  }
  
  .text-line5 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 58%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line6 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 38%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .gender-name {
   padding-left: 0;
  }
  
  .text-line7 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 86%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line8 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 81%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line9 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 48%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line10 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 60%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line11 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 52%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .text-line12 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 74%;
   display: inline-block;
   margin-left: 25px;
   position: relative;
  }
  
  .agency_app1 {
   border-top: 2px solid #00a65a;
   padding-bottom: 20px;
  }
  
  .agency_app1 li {
   text-decoration: none;
   list-style-type: none;
  }
  
  .holder-name {
   padding-top: 30px;
   padding-left: 18px;
  }
  
  .text-line13 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 79%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .text-line14 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 78%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .text-line15 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 82%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .text-line16 {
   background-color: transparent;
   color: #000;
   outline: none;
   outline-style: none;
   border-top: none;
   border-left: none;
   border-right: none;
   border-bottom: solid #00a65a 1px;
   padding: 3px 10px;
   width: 85%;
   display: inline-block;
   margin-left: 25px;
  }
  
  .name_app,
  .sign_app {
   padding-top: 30px;
  }
 </style>
</head>

<body>
 <div class="container">
  <div class="agency_form">
   <div class="row">
    <div class="col-md-12">
     <div class="well well-sm">
      <fieldset>
       <div class="row">
        <div class="col-md-4">
         <div class="logo"> <img src="images/sri%20pathi%20logo.jpg"> </div>
        </div>
        <div class="col-md-8">
         <p class="reg_no">Govt.Regd.No:673/2016</p>
         <div class="head-right">
          <h6>SHRI PATHI REALTORS</h6>
          <div class="address">
           <p>203 J.S.P Complex, Near Guruvayurappan Temple, Uthukuli Main Road, Thirupur 641601. Cell: 98645 64943, 98465 56485</p>
          </div>
         </div>
        </div>
       </div>
       <div class="app_form text-center">
        <h5>AGENCY APPLICATION FORM</h5> </div>
      </fieldset>
      <div class="header-content">
       <ul>
        <li>
         <div class="form-group">
          <label class="col-sm-2">Agency Code:</label>
          <div class="code-text">
           <input type="text" class="form-control"> </div>
         </div>
        </li>
        <li>
         <div class="form-group">
          <label class="col-sm-1">Rank: </label>
          <div class="code-text">
           <input type="text" class="form-control"> </div>
         </div>
        </li>
        <li>
         <div class="form-group">
          <label class="col-sm-1">Date: </label>
          <div class="code-text">
           <input type="text" class="form-control"> </div>
         </div>
        </li>
       </ul>
      </div>
      <div class="agency_app">
       <div class="row">
        <div class="col-md-8">
         <div class="form-group">
          <label class="app_name">Name of Applicant: </label>
          <input type="text" class="text-line form-control"> <span class="letter">(in Full & Block Letter)</span> </div>
         <div class="form-group">
          <label class="app_name">Father's/Husband's Name: </label>
          <input type="text" class="text-line1 form-control"> </div>
         <div class="form-group">
          <label class="app_name">Permanent Address: </label>
          <input type="text" class="text-line2 form-control">
          <input type="text" class="text-line3 form-control"> </div>
         <div class="form-group">
          <div class="row">
           <div class="col-md-6">
            <input type="text" class="text-line4 form-control"> </div>
           <div class="col-md-6">
            <label class="app_name pin-number">Pin: </label>
            <div class="row-fluid">
             <input class="Box productkey1" type="text" name="number1" maxlength="1">
             <input class="Box productkey1" type="text" name="number2" maxlength="1">
             <input class="Box productkey1" type="text" name="number3" maxlength="1">
             <input class="Box productkey1" type="text" name="number4" maxlength="1">
             <input class="Box productkey1" type="text" name="number5" maxlength="1">
             <input class="Box productkey1" type="text" name="number6" maxlength="1"> </div>
           </div>
          </div>
         </div>
        </div>
        <div class="col-md-4">
         <div class="photo-upload"></div>
        </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Phone No: </label>
         <input type="text" class="text-line2 form-control"> </div>
       </div>
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Mobile: </label>
         <input type="text" class="text-line2 form-control"> </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-4" style="width: 32%; padding:0">
        <div class="text-detail form-group">
         <label class="dob">Date of Birth: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="width: 28%; padding:0">
        <div class="text-detail form-group">
         <label class="app_name">Age: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="width: 40%; padding:0">
        <div class="text-detail form-group">
         <label class="gender_name">Sex: Male/Female nationality </label>
         <input type="text" class="text-line6 form-control"> </div>
       </div>
      </div>
      <div class="form-group">
       <label class="app_name">PAN No: </label>
       <input type="text" class="text-line7 form-control"> </div>
      <div class="form-group">
       <label class="app_name">Nominee's Name : </label>
       <input type="text" class="text-line8 form-control"> </div>
      <div class="row">
       <div class="col-md-4" style="width: 32%; padding:0">
        <div class="text-detail form-group">
         <label class="dob">Date of Birth: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="width: 28%; padding:0">
        <div class="text-detail form-group">
         <label class="app_name">Age: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="width: 40%; padding:0">
        <div class="text-detail form-group">
         <label class="gender_name">Sex: M/F Relationship</label>
         <input type="text" class="text-line9 form-control"> </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Name of Applicant: </label>
         <input type="text" class="text-line10 form-control"> </div>
       </div>
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Signature of Applicant: </label>
         <input type="text" class="text-line11 form-control"> </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-4">
        <div class="text-detail form-group">
         <label class="app_name">Rank: </label>
         <input type="text" class="text-line12 form-control"> </div>
       </div>
       <div class="col-md-8">
        <div class="text-detail form-group">
         <label class="app_name">Code: </label>
         <input type="text" class="text-line8 form-control"> </div>
       </div>
      </div>
      <div class="agency_app1">
       <ul>
        <li>
         <div class="form-group">
          <label class="holder-name">6. SR UNIT Manager </label>
          <input type="text" class="text-line13 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">5. UNIT Manager </label>
          <input type="text" class="text-line8 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">4. Senior Coordinator </label>
          <input type="text" class="text-line14 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">3. Coordinator </label>
          <input type="text" class="text-line15 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">2. Senior Advisor </label>
          <input type="text" class="text-line8 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">1. Advisor </label>
          <input type="text" class="text-line16 form-control"> </div>
        </li>
        <li>
         <div class="form-group">
          <label class="app_name">Full Chain of Unit No </label>
          <input type="text" class="text-line14 form-control"> </div>
        </li>
       </ul>
      </div>
      <div class="row">
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Name of Introducer: </label>
         <input type="text" class="text-line10 form-control"> </div>
       </div>
       <div class="col-md-6">
        <div class="text-detail form-group">
         <label class="app_name">Signature of Introducer: </label>
         <input type="text" class="text-line11 form-control"> </div>
       </div>
      </div>
      <div class="row">
       <div class="col-md-4" style="width: 38%;">
        <div class="text-detail form-group">
         <label class="app_name">Introducer Code: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="
 padding: 0;
  width: 28%;
  ">
        <div class="text-detail form-group">
         <label class="app_name">Rank: </label>
         <input type="text" class="text-line5 form-control"> </div>
       </div>
       <div class="col-md-4" style="
 padding: 0;
  width: 34%;
  ">
        <div class="text-detail form-group">
         <label class="app_name">Date: </label>
         <input type="text" class="text-line10 form-control"> </div>
       </div>
      </div>
      <div class="name_app pull-left">
       <label class="app_name">Name of Applicant</label>
      </div>
      <div class="sign_app pull-right">
       <label class="app_name">Signature of Applicant </label>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>