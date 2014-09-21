<?php
/** CSS for Datatable **/
echo $this->Html->css('datatable/jquery.dataTables');

/** Jquery and JS for Datatable **/
echo $this->Html->script('datatable/jquery');
echo $this->Html->script('datatable/jquery.dataTables');
echo $this->Html->script('datatable/shCore');
echo $this->Html->script('datatable/demo');


?>
<script type="text/javascript" language="javascript" class="init">
//    //Call Ajax controller and showuserlist Action for Listing Users.
//$(document).ready(function() {
//	$('#example').dataTable( {
//		"ajax": "<?php echo $this->Html->url('/');?>ajax/showgifts"
//	} );
//} );
</script>
</head>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">Memorials</h1>
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
	<div class="container">

            <?php
            $gift = array();
            $sr=0;
            foreach($gifts as $show_gift) {
                $status = 'Inactive';
                if(angels::APP_GIFT_STATUS_ACTIVE  == $show_gift['Gift']['status']) {
                    $status = 'Active';
                }
                $gift[$sr] = array($show_gift['Gift']['title'],
                                       "<img src=".$this->webroot."img/gifts/".$show_gift['Gift']['image']." width='160' height='120'>",
                                       $status,
                                       $show_gift['Gift']['created'],
                                       $this->Html->link('Edit',array('controller'=>'admins','action'=>'editgift',$show_gift['Gift']['id']))
                                      );
                $sr++;
            }
            ?>
<script>

$(document).ready(function() {
	$('#show_memorial').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="memorial"></table>' );

	$('#memorial').dataTable( {
		"data": <?php echo json_encode($gift,true);?>,
		"columns": [
			{ "title": "Title" },
			{ "title": "Image" },
			{ "title": "Status" },
			{ "title": "Created", "class": "center" },
			{ "title": "Edit" },
		]
	} );	
} );
</script>

<div id="show_memorial"></div>


        </div>
        
    <!-- Tag line Temporary -->
    <a href="javascript:void(0);" class="btn btn-default btn-block">
        Tag Line
    </a>
    </div>
</div>