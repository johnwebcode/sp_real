@extends('layout.layout')
@section('title')<title>Amount Setting</title>@stop
@section('content')
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Amount Setting</h1>
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

            <div class="col-md-12">
                <form class="form-horizontal" action="amount" method="post">
                    <div class="form-group">
                        <div id="setAmount" >
                            <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">

                            
                            <div class="col-sm-2">
                                <select class="form-control" id="duration_type" name="duration_type">
									<option value="">Choose</option>
									<option value="1">Hour</option>
									<option value="2">Day</option>
								</select>
								<span class="text-red"> {{ $errors->first('duration_type')}}</span>
							</div>
							<label class="col-sm-1 control-label">From :  </label>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" value="0" placeholder="From Hour" readonly>
								<span></span>
							</div>

                            <label class="col-sm-1   control-label">UpTo :  </label>
                            <div class="col-sm-2">
								<select class="form-control" id="upto" name="upto">
									<option value="">Choose</option>
								</select>
                                
									<span class="text-red">{{ $errors->first('upto')}}</span>
								</div>

                            <label class="col-sm-1 control-label">Cost :  </label>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" name="cost" id="BasicCost" value="{{old('cost')}}" placeholder="Cost (RM)">
								<span class="text-red">{{ $errors->first('cost')}}</span>
							</div>
                            <div class="col-sm-1">
                                <input class="btn btn-success " type="submit"  id="amountSubmit" value="submit">
                            </div>
                        </div>
                            <div class="col-sm-1 pull-right" id="addNewAmount" style="display:none;">
                                <input class="btn btn-success " type="button"  value="Add">
                            </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12" style="background-color: #ffffff;">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Si No</th>
                            <th>type</th>
                            <th>Duration</th>
                            <th>Cost (RM)</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php $i=1; ?>
                        @foreach($amount as $row)
						<tr>
                            <td>{{$i}}</td>
                            <td>
							<?php if($row->duration_type==1){ echo "Hours"; }else{ echo "Days"; }?>
								</td>
                            <td>0 To {{ $row->upto}} 
								<?php if($row->duration_type==1)
                                {
                                        if($row->upto==1){
											echo 'Hour'; 
										}else{
											echo 'Hours'; 
										}
										
								}else{
										if($row->upto==1){
											echo "Day";  
										}else{
											echo "Days";
										}
                                } ?>
							</td>
                            <td>{{ $row->cost}}</td>
                            <td>
							
                               <a data-method="delete" class="btn btn-xs btn-danger" onclick="$(this).find(&quot;form&quot;).submit();">
                                    <i class="fa fa-trash" data-toggle="tooltip" data-placement="left" title="" data-original-title="Delete"></i>
                                    <form action="amount/{{$row->id}}" method="POST" style="display:none;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                                    </form>
                                </a></td>
                        </tr>
						<?php $i++; ?>
						@endforeach
                        </tbody>
                    </table>
					 <div class="text-center">{!! str_replace('/?', '?', $amount->render()) !!}</div>
                {{--{{ str_replace('/?', '?', $amount->render()) }}--}}
            </div>
                </div>
            </div>
        </section><!-- Main content Emd -->
    </div><!-- /.content-wrapper -->
@stop