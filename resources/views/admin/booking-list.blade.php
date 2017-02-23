<div class="my-park-container">
	<h3 class="text-center ">{{$floor['name']}}</h3>
		
	<ul>
	<input type="hidden" id="currentFloor_id" value="{{$floor['id']}}">
		@for ($i = 1; $i <= $floor['number']; $i++)
			<li>
				<!--<a href="#" data-toggle="modal" data-target="#myModal1" onclick="return ajaxGetParkDetails({{$i}});">-->
				
						@if (in_array($i, $parking))
							<a href="view-slot/{{$floor['id']}}/{{$i}}"  >
								<img onmouseover="return imgHover();" src="img/small-red.png">
							</a>
					 @else 
						<a href="view-slot/{{$floor['id']}}/{{$i}}"  >
							<img src="img/small-green.png">
						</a>
					 @endif 
				
				<div class="bottom-text-id">{{$floor['short_name'].'-'.$i}}</div>
			</li>
		@endfor
	</ul>
</div>
<script>
	function imgHover()
	{
		//alert("Mouseover work");
	}
</script>

<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content"><!-- Modal content Start-->

			<div class="modal-header">
				<button type="button" class="btn btn-danger pull-right" id="psCancelButton" data-dismiss="modal">Close</button>
				<h4 class="modal-title">Booking System</h4>
			</div>

			<div class="modal-body col-md-12">
				<form class="form-horizontal" method="post" enctype="maltipart/form-data" >
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Name : </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" value="" placeholder="Name..." name="psName" id="psName">
							<span class="text-red" id="ErrpsName"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Car No : </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" value="" name="psCarNo" placeholder="Car Reg Number..." id="psCarNo">
							<span class="text-red" id="ErrpsCarNo"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Mobile : </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" value="" name="psMobile" placeholder="Mobile No..." id="psMobile">
							<span class="text-red" id="ErrpsMobile"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">

						</label>
						<div class="col-sm-7">
							<input type="radio" value="1" name="parkStatus" id="parkIt"> Park
							<input type="radio" value="2" name="parkStatus" id="returnIt"> Return
							<span class="text-red" id="ErrparkStatus"></span>
						</div>
					</div>

					<div class="form-group parkOnly-hide">
						<label for="inputPassword3" class="col-sm-3 control-label">Car Image : <span class="re_must">*</span></label>
						<div class="col-sm-7">
							<input required="required" class="form-control" type="file"  onchange="return image();" name="psImage" id="psCarImage" >
							<span class="text-red" id="ErrpsImage"></span>
							<span class="text-green" id="SucpsImage"></span>
							<input type="hidden" id="psImageNameUploaded" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">In Time : </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" value="" id="psInTime" disabled />
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Duration : </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" value="" id="psDuration" disabled />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-5 col-sm-3" id="showImage">

						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<span class="text-red" id="psErrorMsg"></span>
				<input type="hidden" id="ps_hiddenId" value="">
				<button type="button" class="btn btn-success pull-right" id="parkButton" style="display:block;" onclick="return ajaxCreateOrReturnPark();" >Park</button>
				<button type="button" class="btn btn-success pull-right" style="display:none;" id="returnButton" onclick="return ajaxCreateOrReturnPark();" >Return</button>
				<input type="hidden" name="_token" id="psToken" value="{{ csrf_token() }}">
			</div>
		</div><!-- Modal content End-->
	</div>
</div>