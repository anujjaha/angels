<?php
//pr($tribute);
?>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">View Tribute</h1>
</div>
<div class="row">
    <div class="col-lg-12"> 
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- Welcome Message -->
        Memorial created by <?php echo $tribute['Usermeta']['Usermeta']['firstname']." ".$tribute['Usermeta']['Usermeta']['lastname'];?>
        </div>
    </div>
    </div>

<!-- Generate Datatable Listing -->
<div class="panel-body">
   <div class="list-group">
    <body class="dt-example">
        
        <div class="col-lg-12">
    <!--jumbotron-->
    <div class="jumbotron">
        <h4>Tribute Message</h4>
    <div class="alert alert-success">
            <?php echo $tribute['Tribute']['message'];?>
        </div>
       </div>
    <!--End jumbotron-->
    </div>
        
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Image
                </div>
                <div class="panel-body">
                    <p><center>
                        <?php 
                        if(empty($tribute['Memorial']['img'])) {
                            echo $this->Html->image('memorials/default_user.png',array('width'=>180,'height'=>135));
                        } else {
                            echo $this->Html->image('memorials/'.$tribute['Memorial']['img'],array('width'=>180,'height'=>135));
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
                        <?php echo h($tribute['Memorial']['title']." ".$tribute['Memorial']['firstname']); ?>
                    </p>
                    <p>
                        <?php echo __('Middle Name :'); ?>
                        <?php echo h($tribute['Memorial']['middlename']); ?>
                    </p>
                    <p>
                        <?php echo __('Last Name :'); ?>
                        <?php echo h($tribute['Memorial']['lastname']); ?>
                    </p>
                    <p>
                        <?php echo __('Birth Date :'); ?>
                        <?php echo h($tribute['Memorial']['dob_day']."-".$tribute['Memorial']['dob_month']."-".$tribute['Memorial']['dob_year']); ?>
                    </p>
                    <p>
                        <?php echo __('Passing Date :'); ?>
                        <?php echo h($tribute['Memorial']['dop_day']."-".$tribute['Memorial']['dop_month']."-".$tribute['Memorial']['dop_year']); ?>
                    </p>
                    
                </div>
                <div class="panel-footer">
                    <strong>
                    View Counts : <?php echo h($tribute['Memorial']['viewcount']);?>
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
                    <?php echo h($tribute['Usermeta']['Usermeta']['firstname']. " ".$tribute['Usermeta']['Usermeta']['lastname']); ?>
                </p>
                <p>
                    <?php echo __('Relation with Person :'); ?>
                    <?php echo h($tribute['Memorial']['related_person']); ?>
                </p>
                <p>
                    <?php echo __('Death Cause :'); ?>
                    <?php echo h($tribute['Memorial']['death_cause']); ?>
                </p>
                <p>
                    <?php echo __('city:'); ?>
                    <?php echo h($tribute['Memorial']['city']); ?>
                </p>
                <p>
                    <?php echo __('Created :'); ?>
                    <?php echo h($tribute['Memorial']['created']); ?>
                </p>
                
            </div>
            <div class="panel-footer">
                <strong>
                    Memorial Status : <?php
                                   $status = $tribute['Memorial']['status'];
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
            <?php echo $tribute['Memorial']['message'];?>
        </div>
       </div>
    <!--End jumbotron-->
    </div>
</div>


