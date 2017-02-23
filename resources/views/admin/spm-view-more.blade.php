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
                    

             <form class="form-horizontal" method="post">
                    
            <div class="row">
            
               

                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Name :  </label>
                        <div class="col-sm-10">
                           
                                          <?php echo $row ->prj_name ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Description :  </label>
                        <div class="col-sm-10">
                            <?php echo $row ->prj_des ?>
                                         
                        </div>
                    </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Project ID :  </label>
                        <div class="col-sm-10">
                            <?php echo $row ->prj_id ?>
                                         
                        </div>
                    </div>
                 </div>
                 </div>

                 </form> 

                 <div class="row">

                 <div class="col-md-6" >

                 <form class="form-horizontal" action="{{action('SripathiController@plan_booking_a')}}" method="post">
                 <h3>Monthly EMI Plan</h3>

                          <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_a_emi_amount ?>
                                         
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_a_total_duration ?>
                                         

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_a_emi_month ?>
                          
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_a_no_of_emi ?>
                                         
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_a_total_payable_amount ?>
                                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_a_total_benifit_amount ?>
                                          
                        </div>
                    </div>

                   <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                            <input type="submit" class="btn btn-success" value="Book Now"> 
                    </div>
                  </div>

                   </form>
                  </div>

                  <div class="col-md-6">
                   <form class="form-horizontal" action="{{action('SripathiController@plan_booking_b')}}" method="post">

                  <h3>quarterly EMI Plan</h3>

                  <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_b_emi_amount ?>
                                         
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_b_total_duration ?>
                                          

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_b_emi_month ?>
                            
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_b_no_of_emi ?>
                                          
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_b_total_payable_amount ?>
                                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_b_total_benifit_amount ?>
                                        
                        </div>
                    </div>

                    <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Book Now">
                        </div>
                    </div>
                      </form>
                  </div>
                  </div>  




                 <div class="row">

                 <div class="col-md-6">
                  <form class="form-horizontal" action="{{action('SripathiController@plan_booking_c')}}" method="post">

                 <h3>Halfly EMI Plan</h3>

                          <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                          <?php echo $row ->plan_c_emi_amount?>
                                        
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                           <?php echo $row ->plan_c_total_duration?>
                                         

                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_c_emi_month?>
                           
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_c_no_of_emi ?>
                                         
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_c_total_payable_amount ?>
                                         
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_c_total_benifit_amount ?>
                                     
                        </div>
                    </div>
                    

                    <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Book Now">
                        </div>
                    </div>
                       </form>

                  </div>

                  <div class="col-md-6">
                   <form class="form-horizontal" action="{{action('SripathiController@plan_booking_d')}}" method="post">

                  <h3>Yearly EMI Plan</h3>

                  <div class="form-group">
                        <label class="col-sm-5 control-label">EMI  Amount :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_d_emi_amount ?>
                                          
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-5 control-label">Total Dutration:  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_d_total_duration ?>
                                          
                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-5 control-label">EMI Month :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_d_emi_month ?>  
                           
                        </div>
                    </div>

                        

                         <div class="form-group">
                        <label class="col-sm-5 control-label">No. of EMI :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_d_no_of_emi ?>
                                         
                        </div>
                    </div>

                         <div class="form-group">
                        <label class="col-sm-5 control-label">Total Amount :  </label>
                        <div class="col-sm-7">
                            <?php echo $row ->plan_d_total_payable_amount ?>
                                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Land Value :  </label>
                        <div class="col-sm-7">
                             <?php echo $row ->plan_d_total_benifit_amount ?>
                                          
                        </div>
                    </div>

                    <div class="form-group">
                         <div class="col-md-offset-9 col-sm-2">
                             <input type="submit" class="btn btn-success" value="Book Now">
                        </div>
                    </div>


                  </form>
                  </div>
                  </div> 

                   </div>
                
            
            
        </section><!-- Main content Emd -->
        </div>
   <!-- /.content-wrapper -->
@stop