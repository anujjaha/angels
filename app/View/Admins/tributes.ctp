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
    //Call Ajax controller and showuserlist Action for Listing Users.
$(document).ready(function() {
	$('#example').dataTable( {
		"ajax": "<?php echo $this->Html->url('/');?>ajax/showtributes"
	} );
} );
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
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <!-- Header Columns for Listing -->
            <tr>
                <th>Created By</th>
                <th>Person Name</th>
                <th>Date of Birth</th>
                <th>Passing Date</th>
                <th>Death Cause</th>
                <th>Message</th>
                <th>Status</th>
                <th>Created</th>
                <th>View</th>
                <th>Edit</th>
            </tr>
        </thead>

        <tfoot>
            <!-- Footer Columns for Listing -->
            <tr>
                <th>Created By</th>
                <th>Person Name</th>
                <th>Date of Birth</th>
                <th>Passing Date</th>
                <th>Death Cause</th>
                <th>Message</th>
                <th>Status</th>
                <th>Created</th>
                <th>View</th>
                <th>Edit</th>
            </tr>
        </tfoot>
	</table>
        </div>
        
    <!-- Tag line Temporary -->
    <a href="javascript:void(0);" class="btn btn-default btn-block">
        Tag Line
    </a>
    </div>
</div>