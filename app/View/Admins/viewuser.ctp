<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">View Users</h1>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- Welcome Message -->
        Welcome <?php echo $user_name;?>
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
                        if(empty($user['Usermeta']['image'])) {
                            echo $this->Html->image('users/default_user.png',array('width'=>180,'height'=>135));
                        } else {
                            echo $this->Html->image('users/'.$user['Usermeta']['image'],array('width'=>180,'height'=>135));
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
                    Personal Information
                </div>
                <div class="panel-body">
                    <p>
                        <?php echo __('First Name :'); ?>
                        <?php echo h($user['Usermeta']['firstname']); ?>
                    </p>
                    <p>
                        <?php echo __('Middle Name :'); ?>
                        <?php echo h($user['Usermeta']['middlename']); ?>
                    </p>
                    <p>
                        <?php echo __('Last Name :'); ?>
                        <?php echo h($user['Usermeta']['lastname']); ?>
                    </p>
                    <p>
                        <?php echo __('Birth Date :'); ?>
                        <?php echo h($user['Usermeta']['dob_day']."-".$user['Usermeta']['dob_month']."-".$user['Usermeta']['dob_year']); ?>
                    </p>
                    <p>
                        <?php echo __('Gender :'); ?>
                        <?php 
                        
                        $gender = $user['Usermeta']['gender'];
                        $display_gender = "Not Specify";
                        if(angels::APP_GENDER_MALE == $gender) {
                          $display_gender = "Male";
                        }
                        if(angels::APP_GENDER_FEMALE == $gender) {
                          $display_gender = "Female"  ;
                        }
                        echo h($display_gender);
                        ?>
                    </p>
                </div>
                <div class="panel-footer">
                    <strong>
                    User Login : <?php echo h($user['User']['username']);?>
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
                    <?php echo __('Address Line 1 :'); ?>
                    <?php echo h($user['Usermeta']['add_lineone']); ?>
                </p>
                <p>
                    <?php echo __('Address Line 2 :'); ?>
                    <?php echo h($user['Usermeta']['add_linetwo']); ?>
                </p>
                <p>
                    <?php echo __('City :'); ?>
                    <?php echo h($user['Usermeta']['city']); ?>
                </p>
                <p>
                    <?php echo __('State :'); ?>
                    <?php echo h($user['Usermeta']['state']); ?>
                </p>
                <p>
                    <?php echo __('Zip :'); ?>
                    <?php echo h($user['Usermeta']['zip']); ?>
                </p>
            </div>
            <div class="panel-footer">
                <strong>
                    User Status : <?php
                                   $status = $user['User']['status'];
                                   $display_status = "Inactive";
                                   if(angels::APP_USER_STATUS_ACTIVE == $status ) {
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
                        <h4>User Actions</h4>
                        
                        <div class="alert alert-success">
                            Total <?php echo count($user['Memorial']);?> Memorials  by <?php echo $user['Usermeta']['firstname'];?> 
                            <a class="alert-link" href="#show_memorial">View All</a>
                        </div>
                       </div>
                      <!--End jumbotron-->
                </div>
</div>

<?php
/** CSS for Datatable **/
echo $this->Html->css('datatable/jquery.dataTables');

/** Jquery and JS for Datatable **/
echo $this->Html->script('datatable/jquery');
echo $this->Html->script('datatable/jquery.dataTables');
echo $this->Html->script('datatable/shCore');
echo $this->Html->script('datatable/demo');
?>

<?php
$memorials = $user['Memorial'];
$memorial = array();
$sr=0;
foreach($memorials as $show_memorial) {
    $memorial[$sr] = array($show_memorial['firstname']." ".$show_memorial['lastname'],
                           $show_memorial['dob_day']."-".$show_memorial['dob_month']."-".$show_memorial['dob_year'],
                           $show_memorial['dop_day']."-".$show_memorial['dop_month']."-".$show_memorial['dop_year'],
                           $show_memorial['death_cause'],$show_memorial['related_person'],
                           //"<img src=$this->webroot".$show_memorial['img']
                           "<img src=".$this->webroot."img/memorials/".$show_memorial['img']." width='160' height='120'>"
                          );
    $sr++;
}
?>
<script>

$(document).ready(function() {
	$('#show_memorial').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="memorial"></table>' );

	$('#memorial').dataTable( {
		"data": <?php echo json_encode($memorial,true);?>,
		"columns": [
			{ "title": "Name" },
			{ "title": "Birth Date" },
			{ "title": "Passing Date" },
			{ "title": "Death Cause", "class": "center" },
			{ "title": "Related Person", "class": "center" },
			{ "title": "Image", "class": "center" }
		]
	} );	
} );
</script>

<div id="show_memorial"></div>



	

