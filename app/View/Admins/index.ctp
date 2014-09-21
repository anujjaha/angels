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
		"ajax": "<?php echo $this->Html->url('/');?>ajax/showuserlist"
	} );
} );
</script>
</head>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">Dashboard</h1>
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

<div class="row">
    <!--Show Information Block 4 -->
    <div class="col-lg-3">
        <div class="alert alert-danger text-center">
            <i class="fa fa-user fa-3x"></i>
            <!-- Calculate Total Users - Site Users -->
            <strong><?php echo $site_users;?></strong>
            <br>
            Manage Total Users
        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-success text-center">
            <i class="fa fa-users fa-3x"></i>
            <!-- Calculate Total Memorials -->
            <strong><?php echo $site_memorials;?></strong>
            <br>
            Manage Memorials
        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-info text-center">
            <i class="fa fa-rss fa-3x"></i>
            <!-- Calculate Total Tributes -->
            <strong><?php echo $site_tributes;?></strong>
            <br>
            Manage Tributes
        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-warning text-center">
            <i class="fa fa-gift fa-3x"></i>
            <!-- Calculate Total Gifts -->
            <strong><?php echo $site_gifts;?></strong>
            <br>
             Manage Gifts
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
                <th>Username</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Status</th>
                <th>View</th>
                <th>Edit</th>
            </tr>
        </thead>

        <tfoot>
            <!-- Footer Columns for Listing -->
            <tr>
                <th>Username</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Status</th>
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
<?php
/*
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>

*/?>