<?php
    $titles = angels::angels_title();
    $days = angels::date_days();
    $months = angels::date_months();
    $year = angels::date_year();
//    pr($this->request->data);
?>
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
    <h1 class="page-header">Edit Memorial</h1>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info">
        <i class="fa fa-folder-open"></i>
        <!-- User Information -->
        Update Memorial created by : <?php echo $user_meta['Usermeta']['firstname']. ' '.$user_meta['Usermeta']['lastname'];?>
        </div>
    </div>
    </div>

    

<!-- Generate Datatable Listing -->
<div class="panel-body">
    <div class="col-lg-12">
        <!--jumbotron-->
        <div class="jumbotron">
            <?php
                if(!empty($memorial_updated)) {
            ?>
            <div class="alert alert-success">
                <?php echo $this->Session->flash(); ?>
            </div>
            <?php } ?>
            <div class="form-group">
                
<?php echo $this->Form->create('Memorial' ,array('enctype' => 'multipart/form-data') ); ?>
	<?php
		echo $this->Form->input('id');
	?>
                <?php
		echo $this->Form->input('title' , array('type' =>'select',
                                                  'options'=> $titles
                                                ));
                echo $this->Form->input('firstname' , array('label' =>'First Name *','class'=>'form-control'));
		echo $this->Form->input('middlename', array('label' =>'Middle Name','class'=>'form-control'));
		echo $this->Form->input('lastname', array('label' =>'Surname *','class'=>'form-control'));
		echo $this->Form->input('dob_day' , array('type'=>'select',
                                                            'options' =>$days,'class'=>'form-control'));
		echo $this->Form->input('dob_month', array('type'=>'select',
                                                            'options' => $months,
                                                            'class'=>'form-control'
                                                           ));
		echo $this->Form->input('dob_year', array('type'=>'select',
                                                            'options' => $year,
                                                            'class'=>'form-control'
                                                           ));
		echo $this->Form->input('dop_day' , array('type'=>'select',
                                                            'options' =>$days,
                                                            'class'=>'form-control'
                                                            ));
		echo $this->Form->input('dop_month', array('type'=>'select',
                                                            'options' => $months,
                                                            'class'=>'form-control'
                                                           ));
		echo $this->Form->input('dop_year', array('type'=>'select',
                                                            'options' => $year,
                                                            'class'=>'form-control'
                                                           ));
		echo $this->Form->input('city',array('class'=>'form-control'));
		echo $this->Form->input('death_cause',array('class'=>'form-control'));
		echo $this->Form->input('related_person' , array('label' => 'I am this persons','class'=>'form-control'));
		echo $this->Tinymce->input('Memorial.message', array(
                'label' => 'Message',
                'name' => 'message',
                        'class'=>'form-control'
                ),array(
                    'language'=>'en'
                ),
                'bbcode'
            );  
        echo $this->Form->input('img',array('type'=>'file','class'=>'form-control'));
        echo "<br><br>";
        echo $this->Html->image('memorials/'.$this->request->data['Memorial']['img'],array('width'=>160,'height'=>120));
        $options = array('type'=>'submit','value'=>'Update','class'=>'btn btn-primary btn-lg');
	echo "<br><br>";
        echo $this->Form->end($options); ?>
        </div>
     </div>
</div>
</div>