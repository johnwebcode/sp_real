@extends('layout.layout')
@section('title')<title>Amount Setting</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Commission</h1>
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

              <div class="col-md-6">
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
                       
            @foreach($amount as $amt)
        
            @endforeach
            
            <form class="form-horizontal" action="amount" method="post">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Commission Amount: <span class="required-must">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="{{@$amt['narmal_Commission']}}" name="narmal_park">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Totel Voucher: <span class="required-must">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="{{@$amt['Totel Voucher']}}" name="banker_park">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Totel Commission: <span class="required-must">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="{{@$amt['Totel Commission']}}" name="day_park">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">TDS: <span class="required-must">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="{{@$amt['TDS']}}" name="monthly_park">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input class="btn btn-primary" type="submit" value="Change Amount">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                    </div>
                </div>
            </form>
            
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop