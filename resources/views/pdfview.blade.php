<div class="container">
 <br/> <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
 <!DOCTYPE html>
 <html lang="en">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Promotors Document</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="jquery-ui-1.12.0.custom/jquery-ui.css">
  <script src="jss/jquery-3.1.0.js"></script>
  <script src="jquery-ui-1.12.0.custom/jquery-ui.js"></script>
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
   * {
    margin: 0;
    padding: 0;
   }
   
   .form-group {
    /*padding: 8px;
    */
    padding-bottom: 6px;
   }
   
   .document {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
   }
   
   .stamp_paper {
    height: 500px;
   }
   
   .promot_heading {
    text-align: center;
    padding-bottom: 20px;
   }
   
   .promot_heading h5 {
    font-size: 18px;
   }
   
   .promot_heading p {
    color: #727075;
    font-size: 14px;
   }
   
   span.code1 {
    padding-left: 230px;
   }
   
   span.code2 {
    padding-left: 206px;
   }
   
   span.code3 {
    padding-left: 242px;
   }
   
   span.code4 {
    padding-left: 224px;
   }
   
   span.code5 {
    padding-left: 268px;
   }
   
   span.code6 {
    padding-left: 265px;
   }
   
   span.code7 {
    padding-left: 259px;
   }
   
   span.code8 {
    padding-left: 87px;
   }
   
   span.code9 {
    padding-left: 236px;
   }
   
   span.code10 {
    padding-left: 109px;
   }
   
   span.code11 {
    padding-left: 204px;
   }
   
   .date_code {
    padding-left: 5px;
   }
   
   .doc_heading h1 {
    color: #5d5b5e;
   }
   
   .doc_heading p,
   .bottom_content p {
    color: #5b5964;
   }
   
   .plot_heading h3 {
    padding-left: 65px;
    padding-bottom: 10px;
    color: #727075;
    font-size: 16px;
   }
   
   .customer-voucher_det {
    padding-left: 30px;
    color: #7e7b90;
    font-size: 16px;
    margin-right: 100px;
   }
   
   .customer-voucher_det1 {
    padding-left: 30px;
    color: #7e7b90;
    font-size: 16px;
   }
   
   .text-line {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 80px;
   }
   
   .text-line1 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 53px;
   }
   
   .text-line3 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 330px;
   }
   
   .text-line4 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 96px;
   }
   
   .text-line5 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 72px;
   }
   
   .text-line6 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 120px;
   }
   
   .text-line7 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 115px;
   }
   
   .text-line8 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 55%;
    display: inline-block;
    margin-left: 105px;
   }
   
   .text-line9 {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #7e7b90 1px;
    padding: 3px 10px;
    width: 56%;
    display: inline-block;
   }
   
   .bottom_content {
    padding-top: 15px;
    font-size: 18px;
    font-weight: 600;
   }
   
   .bottom_content p {
    text-align: center;
    padding-bottom: 20px;
    font-size: 16px;
   }
   
   .sign {
    color: #60514c;
    font-size: 16px;
   }
   
   .buyer_sign {
    float: right;
    width: 24%;
    /* padding-right: 40px; */
    padding-top: 8px;
    padding-bottom: 10px;
    /* padding-left: 38px; */
    /* margin: 0 auto; */
   }
   
   .witness {
    padding-left: 35px;
   }
   
   .witness h4 {
    color: #727075;
    padding-top: 5px;
    padding-bottom: 10px;
   }
   
   .witness p {
    color: #7e7b90;
    font-size: 12px;
    line-height: 30px;
   }
   
   .clear {
    clear: both;
   }
  </style>

  <body>
   <div class="document">
    <div class="stamp_paper"></div>
    <div class="promotors_doc">


     <form class="form-horizontal" action="" method="post">
      <?php
                            foreach ($spm_plan as $row) {
                        ?>
      <div class="promot_heading">
       <h5>SP REALTORS</h5>
       <div class="promot_address">
        <p>Registration No.673/2016
         <br> Thirupur- 641601</p>
       </div>
      </div>
      <div class="plot_heading">
       <h3>PLOT PURCHASE AGREEMENT DEED</h3></div>
        
      <div class="form-group">
       <label class=" customer-voucher_det"> Agreement No <span class="code1">:</span> </label>
       <label><?php echo $row ->plan_aggrement_no ?></label>
       <label class=" customer-voucher_det"> Dated <span class="date_code">:</span> </label>
       <label><?php echo $row ->created_at ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Plot Seller's Name <span class="code2">:</span> </label>
       <label>SP Realtors</label>
      </div>
      <div class="form-group">
       <label class=""></label>
       <label></label>
      </div>
      <div class="form-group">
       <label class=""></label>
       <label></label>
      </div>
      <div class="form-group">
       <label class="customer-voucher_det"> Plot Buyer's Name <span class="code11">:</span> </label>
       <label><?php echo $row ->plan_buyer_name ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Full Address <span class="code3">:</span> </label>
        <label><?php echo $row ->plan_buyer_address ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Nominee Name <span class="code4">:</span> </label>
        <label><?php echo $row ->plan_nom_name ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Ag.Code <span class="code5">:</span> </label>
        <label><?php echo $row ->plan_agent_code ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Plot Value <span class="code7">:</span> </label>
        <label><?php echo $row ->plan_land_value ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Balance Amount Before Registration <span class="code8">:</span> </label>
       <label><?php echo $row ->plan_balance ?></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det"> Advance Paid <span class="code9">:</span> </label>
        <label><?php echo $row ->plan_advance ?></label>
      </div>
      <div class="form-group">
       <label class=""></label>
       <label></label>
      </div>
      <div class="form-group">
       <label class=" customer-voucher_det1"> Date of commencement - Closing <span class="code10">:</span> </label>
        <label><?php echo $row ->plan_start_date ?> - <?php echo $row ->plan_end_date ?></label>
      </div>
      
      
    </div>
    <div class="bottom_content">
     <p>Please keep the Cash Receipt in your Safe Custody. Registration & Stamp fee to be paid by Buyer</p>
     <div class="buyer_sign">
      <label class="sign"> Signature of Buyer </label>
     </div>
    </div>
    <div class="clear"></div>
    <div class="witness">
     <h4>Witnesses</h4>
     <div class="witness_detail">
      <p>1. <?php echo $row ->plan_agent_name ?> - <?php echo $row ->plan_agent_address ?></p>
      <p>2. <?php echo $row ->plan_agent2_name ?> - <?php echo $row ->plan_agent2_address ?></p>
     </div>
    </div>
    <?php
                            }
                            ?>
     </form>
   </div>
  </body>