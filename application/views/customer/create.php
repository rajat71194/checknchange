<div role="main">
    <div class="container" >
        <div class="page-title">
            <div class="title_left">
                <h3>
                    <?= $mainHeading ?>
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $mainHeading ?> <small><?= $subHeading ?></small></h2>
                        <a class="btn btn-success btn-sm pull-right" href="<?= base_url('customer') ?>"><i class="fa fa-chevron-circle-left"></i> Back</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form class="form-horizontal form-label-left"  data-parsley-validate action="" method="post" enctype="multipart/form-data">
                            <span class="section">General Information</span>
                            <div class='col-md-4 pull-right'>
                                <div class="form-group">
                                    <span class="section">Profile</span>
                                    <div class="kv-avatar center-block" style="width:200px">
                                        <input id="image" name="image" type="file" class="file-loading">
                                    </div><?php echo form_error('image'); ?>

                                </div>
                                 <div class="form-group">
                                     <span class="section">Document</span>                                    
                                    <div class="kv-avatar center-block" style="width:200px">
                                        <input id="image1" name="document" type="file" class="file-loading">
                                    </div><?php echo form_error('document'); ?>

                                </div>
                            </div> 
                            <div class="col-md-8">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input data-parsley-error-message="The First Name field is required." id="employee_name" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('first_name')) > 0) ? "parsley-error" : "" ?>" value="<?php echo set_value('first_name'); ?>" name="first_name" placeholder="Customer name" required="required" type="text">
                                        <?php echo form_error('first_name'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input data-parsley-error-message="The Last Name field is required." id="employee_lname" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('last_name')) > 0) ? "parsley-error" : "" ?>" value="<?php echo set_value('last_name'); ?>" name="last_name" placeholder="Customer name" required="required" type="text">
                                        <?php echo form_error('last_name'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_code">Customer Code <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
					 <input data-parsley-error-message="The Code field is required." id="employee_code" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_code')) > 0) ? "parsley-error" : "" ?>" value="<?php echo 'CUS' . random_string('numeric') ?>" readonly="" name="user_code" placeholder="Customer code" required="required" type="text">
                                        <?php echo form_error('user_code'); ?>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="password" data-parsley-error-message="The Password field is required." placeholder="Password" class="form-control col-md-7 col-xs-12" name="user_password" id="user_password" required="required" value="12345" data-parsley-id="8">
                                    </div>

                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" placeholder="Confirm Password" value="12345" class="form-control col-md-7 col-xs-12 " data-parsley-equalto="#user_password" name="passconf" id="passwordl2" data-parsley-id="10">

                                    </div>

                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="organisation_address">Address 1 <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input type="text" value="<?php echo set_value('address1'); ?>" data-parsley-error-message="The Address field is required"  id="organisation_address1" required="required" placeholder="First line of address" name="address1" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('address1')) > 0) ? "parsley-error" : "" ?>">
                                        <?php echo form_error('address1'); ?>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="organisation_address2">Address 2 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input type="text" value="<?php echo set_value('address2'); ?>" id="organisation_address2" placeholder="Second line of address" name="address2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input type="text" value="<?php echo set_value('user_city'); ?>" data-parsley-error-message="Please add city."  id="city" required="required" placeholder="The city you live in" name="user_city" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_city')) > 0) ? "parsley-error" : "" ?>">
                                        <?php echo form_error('user_city'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">State <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input type="text" value="<?php echo set_value('user_country'); ?>" data-parsley-error-message="State is required"  id="country" required="required" placeholder="The State you live in" name="user_country" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_country')) > 0) ? "parsley-error" : "" ?>">
                                        <?php echo form_error('user_country'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Postcode <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input type="text" value="<?php echo set_value('user_postcode'); ?>" data-parsley-error-message="Please add Postcode."  id="user_postcode" required="required" placeholder="Your postcode" name="user_postcode" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_postcode')) > 0) ? "parsley-error" : "" ?>">
                                        <?php echo form_error('user_postcode'); ?>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="organisation_phone">Mobile No<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
					 <input id="user_phone" name="user_mobile" type="text" data-parsley-type="integer"   data-parsley-required-message="The Mobile field is required." data-parsley-integer-message="The Mobile field should be integer." value="<?php echo set_value('user_mobile'); ?>" required="required" class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_mobile')) > 0) ? "parsley-error" : "" ?>">
                                        <?php echo form_error('user_mobile'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="organisation_phone">Phone Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="user_phone" name="user_phone" type="text"  value="<?php echo set_value('user_phone'); ?>"  class="form-control col-md-7 col-xs-12">
                                        <?php echo form_error('user_phone'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email"  value="<?php echo set_value('user_email'); ?>"  class="form-control col-md-7 col-xs-12 <?= (strlen(form_error('user_email')) > 0) ? "" : "" ?>" placeholder="Email" class="form-control col-md-7 col-xs-12" name="user_email" id="email"  data-parsley-id="6">
                                        <?php echo form_error('user_email'); ?>                                            
                                    </div>

                                </div>
				 <div class="item form-group">
                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" data-parsley-error-message="The Dob field is required." value="<?php echo set_value('dob'); ?>" required="required" class="datepicker form-control col-md-7 col-xs-12 <?= (strlen(form_error('dob')) > 0) ? "parsley-error" : "" ?>" placeholder="Dob" class="form-control col-md-7 col-xs-12" name="dob" id="email" required="required" data-parsley-id="6">
                                        <?php echo form_error('dob'); ?>                                            
                                    </div>

                                </div>
				 <div class="item form-group">
                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Anniversary </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" data-parsley-error-message="The Annivery field is required." value="<?php echo set_value('annivery'); ?>" required="required" class="datepicker form-control col-md-7 col-xs-12 <?= (strlen(form_error('annivery')) > 0) ? "parsley-error" : "" ?>" placeholder="Annivery" class="form-control col-md-7 col-xs-12" name="annivery" id="annivery" required="required" data-parsley-id="6">
                                        <?php echo form_error('annivery'); ?>                                            
                                    </div>

                                </div>
                                <div class="clearfix"></div>
				<span class="section">General Information</span>
				<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_notes">User Type<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
					 <select class="form-control" name="user_type" id="user_type" >
					      <option value="">Select User Type</option>
					      <option value="premium"  <?php echo set_select('user_type', 'premium'); ?>>Premium</option>
					      <option value="regular" <?php echo set_select('user_type', 'regular'); ?>>Regular</option>
					 </select>
					 <?php echo form_error('user_type'); ?>
                                    </div>
                                </div>
				<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_notes">Reference By<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
					 <select name="reference_by" class="form-control" id="reference_by">
					      <option value="">Select Reference </option>
					      <?php if($userdata){
					      foreach ($userdata as $uservalue) {
						   ?>
					      <option <?php echo set_select('reference_by', $uservalue['user_id']); ?> value="<?php echo $uservalue['user_id']; ?>"><?php echo $uservalue['user_name']; ?></option>
					      <?php
						   }
						   
					      }?>
					      
					 </select>
					 <?php echo form_error('reference_by'); ?>
                                    </div>
                                </div>
				<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_notes">User Amc<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
					 <select multiple="" class="form-control" name="user_amc[]" id="user_amc" data-placeholder="User Amc">
					       <?php if($amcdata){
					      foreach ($amcdata as $amcvalue) {
						   ?>
					      <option <?php echo set_select('user_amc[]', $amcvalue['id']); ?> value="<?php echo $amcvalue['id']; ?>"><?php echo $amcvalue['amc_name']; ?></option>
					      <?php
						   }
						   
					      }?>
					      
					 </select>
					 <?php echo form_error('user_amc[]'); ?>
                                    </div>
                                </div>
				<div class="clearfix"></div>
				<div class="amc_view">
				 <span class="section">User Amc</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_notes">
                                    </label>
				     <div class="col-md-6 col-sm-6 col-xs-12 amc_table" style="display: none">
					 <table class="amc_table table table-bordered">
					      <thead><tr>
							<td>Amc Name</td>
							<td>Start Date</td>
							<td>End Date</td>
							<td>Amc Price</td>
						   </tr>
					      </thead>
					      <tbody>
						   
					      </tbody>
					 </table>
                                    </div>
                                </div>
                                </div>
				<div class="clearfix"></div>
                            
                                <span class="section">Other Information</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_notes">Notes
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="organisation_notes" placeholder="" name="user_note" class="form-control col-md-7 col-xs-12"><?php echo set_value('user_note'); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="ln_solid"></div>

                            <div class="row">
                                <div class="form-group pull-right">


                                    <a href="<?= base_url('customer') ?>" class="btn btn-default ">Cancel</a>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>

                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal form-label-left"   action="<?php echo base_url('employee/upload_attachment'); ?>" method="post" enctype="multipart/form-data">

                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
     
</div></div>
<script>
    
    $("body").ready(function () {
	 $("select").chosen({width: "100%",
          }); 
        var base_url = $("#base_url").val();
        $("#image").fileinput({
            overwriteInitial: true,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="' + base_url + 'assets/img/default_avatar_male.jpg" alt="Your Organisation Logo" style="width:190px">',
            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
//            allowedFileExtensions: ["jpg", "png", "gif","docx","doc","pdf"]
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
         $("#image1").fileinput({
            overwriteInitial: true,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="' + base_url + 'assets/img/people-300x300.png" alt="Your Organisation Logo" style="width:190px">',
            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
        });

        var url = '<?php echo base_url(); ?>employeeController/upload_attachement';

        
	 var dateNow = new Date();
	   $('.datepicker').datetimepicker({
                    format: 'DD-MM-YYYY',
                    defaultDate:moment(dateNow)
                 });   

	$('body').on('change','#user_amc',function(){
	     var amc_id = [];
	     amc_id =  $(this).val();

	    $('.amc_table').show();
	    console.log(amc_id);
	    $.ajax({
		    url: base_url + 'customerController/getAmc',
		    type: 'POST',
		    data: {amc_id:amc_id},
		    success: function (data) {
			var data =  $.parseJSON(data);
			 console.log(data);
			      $(".amc_table tbody").html(data);
	  }
	       });
     
     });	    
     //price change
     
     $('body').on('keyup','.amc_price',function(){
	  var count = 0;
	$('.amc_price').each(function(key,value){
	    count = count + parseInt($(this).val());
	});  
	
	$('.amc_total').text(count);
     });
     
     //customer 
	var emp_code = $("#employee_code").val();
     $('body').on('keyup','#employee_name',function(){
	code(this,emp_code);
     });
     $('body').on('keyup','#employee_lname',function(){
	  
	code(this,emp_code);
     });

//                        });
    });
    
    function code(obj,emp_code){
	 var code1 = '';
	var code2 = '';
	var code3 = '';
	var final = '';
	  var fname = $(obj).val();
	var lname = $('#employee_lname').val();
	code1 = fname.substr(0,1);
	
	code2 = lname.substr(0,1);
	code3 = emp_code.substr(3,8);

	  $("#employee_code").val(code1.toUpperCase()+code2.toUpperCase()+code3);
    }
</script>

<!-- footer content -->
