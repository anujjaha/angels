<script>
    $(function() {
    $( "#dob_day" ).datepicker();
    });
    
    
    tinymce.init({
      entity_encoding : "raw";
});
    </script>
<div class="col-lg-12">
    <!-- Welcome Page - Dashboard Message -->
    <h1 class="page-header">Edit Tribute</h1>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- User Information -->
        Update Tribute created by : <?php echo $user_meta['Usermeta']['firstname']. ' '.$user_meta['Usermeta']['lastname'];?>
        </div>
    </div>
    </div>

    

<!-- Generate Datatable Listing -->
<div class="panel-body">
    <div class="col-lg-12">
        <!--jumbotron-->
        <div class="jumbotron">
            <?php
                if(!empty($tribute_updated)) {
            ?>
            <div class="alert alert-success">
                <?php echo $this->Session->flash(); ?>
            </div>
            <?php } ?>
            <div class="form-group">
                
<?php echo $this->Form->create('Tribute' ,array('enctype' => 'multipart/form-data') ); ?>
	<?php
		echo $this->Form->input('id');
	?>
                <?php
		echo $this->Tinymce->input('Tribute.message', array(
                'label' => 'Message',
                'name' => 'message',
                        'class'=>'form-control'
                ),array(
                    'language'=>'en'
                ),
                'bbcode'
            );  
        $options = array('label'=>'Update', 'type'=>'submit','value'=>'Update','class'=>'btn btn-primary btn-lg');
	echo "<br><br>";
        echo $this->Form->end($options); ?>
        </div>
     </div>
</div>
</div>