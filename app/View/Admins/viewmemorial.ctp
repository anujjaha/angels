<?php
//pr($memorial);
?>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">View Memorial</h1>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- Welcome Message -->
        Memorial created by <?php echo $memorial['Usermeta']['Usermeta']['firstname']." ".$memorial['Usermeta']['Usermeta']['lastname'];?>
        </div>
    </div>
    </div>

<!-- Generate Datatable Listing -->
<div class="panel-body">
   <div class="list-group">
    <body class="dt-example">
        
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Image
                </div>
                <div class="panel-body">
                    <p><center>
                        <?php 
                        if(empty($memorial['Memorial']['img'])) {
                            echo $this->Html->image('memorials/default_user.png',array('width'=>180,'height'=>135));
                        } else {
                            echo $this->Html->image('memorials/'.$memorial['Memorial']['img'],array('width'=>180,'height'=>135));
                        }
                        ?>
                    </center>
                    </p>
                    
                </div>
                <div class="panel-footer">
                    <strong><?php echo __('Photo'); ?></strong>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Memorial Details
                </div>
                <div class="panel-body">
                    <p>
                        <?php echo __('First Name :'); ?>
                        <?php echo h($memorial['Memorial']['title']." ".$memorial['Memorial']['firstname']); ?>
                    </p>
                    <p>
                        <?php echo __('Middle Name :'); ?>
                        <?php echo h($memorial['Memorial']['middlename']); ?>
                    </p>
                    <p>
                        <?php echo __('Last Name :'); ?>
                        <?php echo h($memorial['Memorial']['lastname']); ?>
                    </p>
                    <p>
                        <?php echo __('Birth Date :'); ?>
                        <?php echo h($memorial['Memorial']['dob_day']."-".$memorial['Memorial']['dob_month']."-".$memorial['Memorial']['dob_year']); ?>
                    </p>
                    <p>
                        <?php echo __('Passing Date :'); ?>
                        <?php echo h($memorial['Memorial']['dop_day']."-".$memorial['Memorial']['dop_month']."-".$memorial['Memorial']['dop_year']); ?>
                    </p>
                    
                </div>
                <div class="panel-footer">
                    <strong>
                    View Counts : <?php echo h($memorial['Memorial']['viewcount']);?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Detail Information
            </div>
            <div class="panel-body">
                <p>
                    <?php echo __('Created by :'); ?>
                    <?php echo h($memorial['Usermeta']['Usermeta']['firstname']. " ".$memorial['Usermeta']['Usermeta']['lastname']); ?>
                </p>
                <p>
                    <?php echo __('Relation with Person :'); ?>
                    <?php echo h($memorial['Memorial']['related_person']); ?>
                </p>
                <p>
                    <?php echo __('Death Cause :'); ?>
                    <?php echo h($memorial['Memorial']['death_cause']); ?>
                </p>
                <p>
                    <?php echo __('city:'); ?>
                    <?php echo h($memorial['Memorial']['city']); ?>
                </p>
                <p>
                    <?php echo __('Created :'); ?>
                    <?php echo h($memorial['Memorial']['created']); ?>
                </p>
                
            </div>
            <div class="panel-footer">
                <strong>
                    Memorial Status : <?php
                                   $status = $memorial['Memorial']['status'];
                                   $display_status = "Inactive";
                                   if(angels::APP_MEMORIAL_STATUS_ACTIVE == $status ) {
                                      $display_status = "Active" ;
                                   }
                                   echo $display_status;
                                   ?>
                    </strong>
            </div>
        </div>
    </div>
</div>
    
    <div class="col-lg-12">
                     <!--jumbotron-->
                    <div class="jumbotron">
                        <h4>Memorial Message</h4>
                        
                        <div class="alert alert-success">
                            <?php echo $memorial['Memorial']['message'];?>
                        </div>
                       </div>
                      <!--End jumbotron-->
                </div>
</div>


