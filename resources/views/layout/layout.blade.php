<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('dist/img/car_park_title.png')}}" />
	<title>
      @if(@$title)
        {{$title}}
      @else  SP-REALTORS
      @endif
    </title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
      <link href="{{ URL::asset('css/css/normalize.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- agency form css file -->
           <link href="{{ URL::asset('agentform///maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ URL::asset('agentform/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i')}}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::asset('agentform/jquery-ui-1.12.0.custom/jquery-ui.css')}}" rel="stylesheet" type="text/css" />
              <link href="{{ URL::asset('agentform/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
           
           <link href="{{ URL::asset('agentform/css/agency-form.css')}}" rel="stylesheet" type="text/css" />
 
             

    <!-- Add mycss.css File -->
    <link href="{{ URL::asset('dist/css/mycss.css')}}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ URL::asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ URL::asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ URL::asset('plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ URL::asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ URL::asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ URL::asset('plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
	<link href="{{ URL::asset('plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />
	<!-- Maltiple Select -->
	<link href="{{ URL::asset('css/multiple-select/magicsuggest-min.css')}}" rel="stylesheet">
    <!-- Date Time Picker CSS-->
	<link href="{{ URL::asset('plugins/datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">


<style>
 .tablespm {
    border-collapse: collapse;
     width: 100%;
     height:100%;
     
}

.tablespm, td, th {
    border: 0px solid black;
}
</style>

    <script type="text/javascript">
      var baseurl = "{{url('/')}}/";
    </script>

</head>
<body class="skin-blue sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo"><!-- Logo -->
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">Real-Estate</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SP-REALTORS</b></span></a>
      <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ URL::asset('dist/img/car_park_title.png')}}" class="user-image" alt="User Image"/>
                <span class="hidden-xs"> {{Auth::user()->first_name }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ URL::asset('dist/img/car_park_title.png')}}" class="img-circle" alt="User Image" />
                  <p> {{Auth::user()->email }}
                    <small></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{URL::to('#')}}" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ URL::to('SignOut') }}" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('dist/img/car_park_title.png')}}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p> {{Auth::user()->first_name}}</p>
        </div>
      </div>

      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<?php if(Auth::user()->id == 1){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit text-green"></i> <span>Project</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('add-project')}}"><i class="glyphicon glyphicon-plus-sign"></i> Create New Project</a></li>
            <li><a href="{{URL::to('project-details')}}"><i class="glyphicon glyphicon-wrench"></i> View Project</a></li>
              <li><a href="{{URL::to('spm-create')}}"><i class="glyphicon glyphicon-wrench"></i> Create Sri Project</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-group text-green"></i> <span>Agent</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('new-agent')}}"><i class="glyphicon glyphicon-plus-sign"></i>New Agent</a></li>
            <li><a href="{{URL::to('agent-details')}}"><i class="glyphicon glyphicon-book"></i> View Agent</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-plus-sign text-green"></i> <span>Sripathi project</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('spm-view')}}"><i class="glyphicon glyphicon-plus-sign"></i>SPM</a></li>
            <li><a href="{{URL::to('spc-view')}}"><i class="glyphicon glyphicon-book"></i> SPC</a></li>
            
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-plus-sign text-green"></i> <span>Booking</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{URL::to('bookspm')}}"><i class="fa fa-edit text-green"></i><span>Booking SPM</span></a></li>
        <li><a href="{{URL::to('booking')}}"><i class="fa fa-edit text-green"></i><span>Booking Plot</span></a></li>
        <li><a href="{{URL::to('parking-list')}}"><i class="fa fa-list text-green"></i> <span>Plot Booking Status</span></a></li>
        </ul>
        </li>

            <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-plus-sign text-green"></i> <span>Commission</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
		<li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> Add Commission</span></a></li>
    <li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> View Commission</span></a></li>
        </ul>
        </li>

 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-plus-sign text-green"></i> <span>Customer payment</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
    <li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> Search Details</span></a></li>
    <li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> Payment Receipt</span></a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-plus-sign text-green"></i> <span>Agent payment</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
    <li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> Check Agent Payment</span></a></li>
    <li><a href="{{URL::to('amount')}}"><i class="fa fa-circle-o text-yellow"></i><span> Agent Payment Receipt</span></a></li>
        </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit text-green"></i> <span>Report</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('report-all')}}"><i class="glyphicon glyphicon-plus-sign"></i>Customer Report</a></li>
                        <li><a href="{{URL::to('report-all')}}"><i class="glyphicon glyphicon-plus-sign"></i>Agent Report</a></li>
            <li><a href="{{URL::to('report-all')}}"><i class="glyphicon glyphicon-plus-sign"></i>Plot Report</a></li>
            <li><a href="{{URL::to('report-all')}}"><i class="glyphicon glyphicon-plus-sign"></i>Project Report</a></li>

           <!-- <li><a href="{{URL::to('#')}}"><i class="glyphicon glyphicon-wrench"></i> By Staff</a></li>-->
          </ul>
        </li>

        
		<?php } ?>
        <?php if(Auth::user()->id != 1){ ?>
			<li><a href="{{URL::to('plot-plan')}}"><i class="fa fa-home text-green"></i> <span>Plot Plan</span></a></li>
			<li><a href="{{URL::to('parking-list')}}"><i class="fa fa-list text-gray"></i> <span>Plot Booking Status</span></a></li>
      <li><a href="{{URL::to('Land-Booking-Application')}}"><i class="fa fa-list text-gray"></i> <span>Land Booking Application</span></a></li>
		<?php } ?>
        {{--<li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o text-red"></i> <span>View Parking System</span></a></li>--}}
      </ul>
    </section>
  </aside><!-- /.sidebar -->

  @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    <strong>Copyright &copy; 2016 <a href="#">www.aimwindow.com</a>.</strong> All rights reserved.
  </footer>
  <div class='control-sidebar-bg'></div>

</div><!-- ./wrapper -->
     <!-- agency application-->
      <script src="{{ URL::asset('agentform/jss/jquery-3.1.0.js')}}"></script>
     <script src="{{ URL::asset('agentform/jquery-ui-1.12.0.custom/jquery-ui.js')}}"></script>
    <script src="{{ URL::asset('agentform/js/jquery-3.1.0.min.js')}}"></script>
     <script src="{{ URL::asset('agentform/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('agentform/text/javascript')}}"></script>
  <!-- jQuery 2.1.4 -->
  <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
  <!-- jQuery UI 1.11.2 -->
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  //  $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- Morris.js charts -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{ URL::asset('plugins/morris/morris.min.js')}}" type="text/javascript"></script>
  <!-- Sparkline -->
  <script src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
  {{--<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>--}}
  <!-- jQuery Knob Chart -->
  <script src="{{ URL::asset('plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
  <script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
  <!-- Slimscroll -->
  <script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
  <!-- FastClick -->
  <script src="{{ URL::asset('plugins/fastclick/fastclick.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ URL::asset('dist/js/app.min.js')}}" type="text/javascript"></script>
  <!-- Jquery Maltiple Select -->
  <script src="{{ URL::asset('plugins/js/multiple-select.js')}}"></script>
  <script src="{{ URL::asset('plugins/multiple-select/magicsuggest-min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{ URL::asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
  <!-- Date Time Picker JS-->
  <script src="{{ URL::asset('plugins/datetimepicker/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

  <!-- User Code -->
  <script src="{{ URL::asset('plugins/js/validation.js')}}"></script>
   
<!-- iCheck -->
<script>
	$(function () {
		$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
		});
	});
</script>

<!-- Jquery Flash Message -->
<script type="text/javascript" >
  $(document).ready(function(){ setTimeout(function(){$(".flash_alert").fadeOut("slow", function (){
    $(".flash_alert").remove();}); }, 4000);});
</script>

<!-- Date Time Picker -->
<script type="text/javascript">
  $(function ()
  {
    $('#datetimepicker1').datetimepicker(
            {
              format : "DD/MM/YYYY"
            });
    $('#datetimepicker2').datetimepicker(
            {
              format : "DD/MM/YYYY",
              useCurrent: false //Important! See issue #1075
            });

    $("#datetimepicker1").on("dp.change", function (e)
    {
      $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker2").on("dp.change", function (e)
    {
      $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
    });
  });

  $(function ()
  {
    $('#datetimepicker3').datetimepicker(
            {
              format : "DD/MM/YYYY"
            });
    $('#datetimepicker4').datetimepicker(
            {
              format : "DD/MM/YYYY",
              useCurrent: false //Important! See issue #1075
            });

    $("#datetimepicker3").on("dp.change", function (e)
    {
      $('#datetimepicker4').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker4").on("dp.change", function (e)
    {
      $('#datetimepicker3').data("DateTimePicker").maxDate(e.date);
    });
  });

  


</script>




<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('a_emi_amount').value;
            var txtSecondNumberValue = document.getElementById('a_no_of_emi').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('a_total_payable_amount').value = result;
            }
        }

</script>
<script>
function sum1() {
            var txtFirstNumberValue = document.getElementById('a_total_duration').value;
            var result = parseInt(txtFirstNumberValue) / 1;
            if (!isNaN(result)) {
                document.getElementById('a_no_of_emi').value = result;
            }
        }

</script>
<script>
function sumb() {
            var txtFirstNumberValue = document.getElementById('b_emi_amount').value;
            var txtSecondNumberValue = document.getElementById('b_no_of_emi').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('b_total_payable_amount').value = result;
            }
        }

</script>
<script>
function sumb1() {
            var txtFirstNumberValue = document.getElementById('b_total_duration').value;
            var result = parseInt(txtFirstNumberValue) / 3;
            if (!isNaN(result)) {
                document.getElementById('b_no_of_emi').value = result;
            }
        }

</script>


<script>
function sumc() {
            var txtFirstNumberValue = document.getElementById('c_emi_amount').value;
            var txtSecondNumberValue = document.getElementById('c_no_of_emi').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('c_total_payable_amount').value = result;
            }
        }

</script>
<script>
function sumc1() {
            var txtFirstNumberValue = document.getElementById('c_total_duration').value;
            var result = parseInt(txtFirstNumberValue) / 6;
            if (!isNaN(result)) {
                document.getElementById('c_no_of_emi').value = result;
            }
        }

</script>

<script>
function sumd() {
            var txtFirstNumberValue = document.getElementById('d_emi_amount').value;
            var txtSecondNumberValue = document.getElementById('d_no_of_emi').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('d_total_payable_amount').value = result;
            }
        }

</script>
<script>
function sumd1() {
            var txtFirstNumberValue = document.getElementById('d_total_duration').value;
            var result = parseInt(txtFirstNumberValue) / 12;
            if (!isNaN(result)) {
                document.getElementById('d_no_of_emi').value = result;
            }
        }

</script>
<!-- 
<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('agent_code').value, 10000);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('agent_code').value = value;
}
</script>
-->
<script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("agent_code").innerHTML = " " + localStorage.clickcount + " time(s).";
    } else {
        document.getElementById("agent_code").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>

<script>
  $("document").ready(function(){
    $("#getreport").click(function(e){
      e.preventDefault();
      var floor = $("select#floor").val();
      var date_from = $("input#date_from").val();
      var date_to = $("input#date_to").val();
      var _token = $("input._token").val();

      var dataString = 'floor='+floor+'&amp;date_from='+date_from+'&amp;date_to='+date_to+'&amp;_token='+_token;

      alert(dataString);
      $.ajax({
        type: "POST",
        url : baseurl + "report-all",
        data : dataString,
        success : function(data){
          //console.log(data);
          alert(data);
        }
      });

    });
  });


  {{--$.ajax({--}}
    {{--type: 'POST',--}}
    {{--url: baseurl +'regcheck',--}}
    {{--data: {"first_name":first_name,"last_name":last_name,"email":email,"username": username,"password":password,"gender":gender,"phone":phone,'state':state},--}}
    {{--dataType: 'json',--}}
    {{--success: function(response)--}}
    {{--{--}}
      {{--alert(response);--}}
      {{--if(response.success=='Registration Success'){--}}
        {{--alert('Registration Success, Contact Admin to Active Account');--}}
        {{--window.location.href = baseurl;--}}
        {{--return false;--}}
      {{--}else{--}}
        {{--alert('Registration Failure, PLease Contact Admin @ Info@aimwindow.com');--}}
      {{--}--}}
    {{--}--}}
  {{--});--}}




</script>

<script type="text/javascript">
       $("#start_date").datepicker({
    dateFormat: 'dd/mm/yy',
    onSelect: function (selectedDate) {
      alert('its me start');
        if (this.id == 'start_date') {
            //console.log(selectedDate);//2014-12-30
            var arr = selectedDate.split("/");
            var date = new Date(arr[2]+"-"+arr[1]+"-"+arr[0]);
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var minDate = new Date(y, m + 60, d);
            $("#end_date").datepicker('setDate', minDate);

          }
    }
});
$("#end_date").datepicker({dateFormat: 'dd/mm/yy'});
       </script>

       

</body>
</html>