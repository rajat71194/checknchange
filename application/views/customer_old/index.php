<?php
$loginuser = $this->session->userdata('logged_in');
?>
<div class="right_col" role="main">
    <div class="container" >
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><?php echo $mainHeading; ?></h3>
                </div>
                  
                <div class="title_right">
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                       <div class="">
                          <?php   if(access_check("organisation","view")) : ?>
                         <select name="orginasation_search" id="orginasation_search" tabindex="-1" class="select_organisation form-control">    
                             <option value="" selected>All</option>                   
                               <?php foreach ($organisation as $org) { ?>
                               <option value=<?php echo $org['organisation_id']; ?>><?= $org['organisation_name']?></option>
                              <?php } ?>
                         </select>   
                            <?php 
                            else : ?>
                            <input type="hidden" name="orginasation_search" id="orginasation_search" value="<?php  $org=getUserOrginasationDetails($loginuser['user_id']); echo $org['organisation_id']; ?>">
                            <?php
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
              <div class="clearfix"></div>
             <div class="row" id="custom_message">
                <?php if ($this->session->flashdata('customer_danger')) : ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('customer_danger'); ?>
                </div>
                <?php endif; ?>
                 <?php if ($this->session->flashdata('customer_success')) : ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('customer_success'); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                             
                        <div class="x_content">

                            <div class="row">
                                
                                <div class="col-md-9 col-sm-9 col-xs-12"><?php
                        if(access_check("customer","add")) :
                            if($customer_type==1){
                                ?> <a href="<?php echo base_url() . 'customer/add'; ?>" type="button" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="right" title="Add customer"><i class="fa fa-plus-circle">
                            </i>&nbsp;&nbsp;Add Customer</a>
                                
                          <?php 
                            }
                           
                            else{
                            ?>
                     <a href="javascript:void(0)" type="button" class="btn btn-primary btn-xs approve_all" data-toggle="tooltip" data-placement="bottom" title="Approval all"><i class="glyphicon glyphicon-th">
                            </i>&nbsp;&nbsp;Approval All</a>                
                     <a href="javascript:void(0)" type="button" class="btn btn-success btn-xs selected_approval" data-toggle="tooltip" data-placement="right" title="Approval selected customer"><i class="glyphicon glyphicon-ok">
                            </i>&nbsp;&nbsp;Approval Selected</a>                
                            <?php }
                            
                            
                            
                            endif; ?></div>
                    <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                            <div class="title_right">
                        <div class="input-group">
                            <input type="text" class="form-control search_input" id="search_box" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-info search_button" id="search_button" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>   </div>
                                   <div class="row">
                             
                                <div class="clearfix"></div>
                                
                                <div id="customer">
                                
                           
                                </div>
                                <div id="unapprovedcustomer">
                                
                           
                                </div>
      <div align='center' class="wait">
          <div class="loader-center"><img height='50' width='50' src='<?php echo base_url(); ?>assets/images/ajax-loader_1.gif'></div>
      </div>
     <input type='hidden' name='search_val' id='search_val'>
     <input type='hidden' id='customer_type' value="<?php echo $customer_type ;?>">







    </div>

                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">&nbsp;</div>
                        <div class="col-md-12 col-sm-12 col-xs-12 pagination_div pagination pagination-split center text-center">
                              
</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="clearfix"></div>

<div class="clearfix"></div>


 <style>
.top_search .search_button {
 color:#ffffff !important;
}

.box_selected {
    box-shadow: 0 0 4px 1px #0369b7;
    -moz-box-shadow: 0 0 4px 1px #0369b7;
    -webkit-box-shadow: 0 0 4px 1px #0369b7;
}
     
 </style>