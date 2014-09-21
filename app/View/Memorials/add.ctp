<?php
    $titles = angels::angels_title();
    $days = angels::date_days();
    $months = angels::date_months();
    $year = angels::date_year();
?>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

     <script>
    $(function() {
    $( "#dob_day" ).datepicker();
    });
    
    
    tinymce.init({
      entity_encoding : "raw";
});
    </script>
<div class="memorials form">
<?php echo $this->Form->create('Memorial',array('enctype'=>'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Memorial'); ?></legend>
	<?php
		echo $this->Form->input('title' , array('type' =>'select',
                                                  'options'=> $titles
                                                ));
                echo $this->Form->input('firstname' , array('label' =>'First Name *'));
		echo $this->Form->input('middlename', array('label' =>'Middle Name'));
		echo $this->Form->input('lastname', array('label' =>'Surname *'));
		echo $this->Form->input('dob_day' , array('type'=>'select',
                                                            'options' =>$days));
		echo $this->Form->input('dob_month', array('type'=>'select',
                                                            'options' => $months
                                                           ));
		echo $this->Form->input('dob_year', array('type'=>'select',
                                                            'options' => $year
                                                           ));
		echo $this->Form->input('dop_day' , array('type'=>'select',
                                                            'options' =>$days));
		echo $this->Form->input('dop_month', array('type'=>'select',
                                                            'options' => $months
                                                           ));
		echo $this->Form->input('dop_year', array('type'=>'select',
                                                            'options' => $year
                                                           ));
		echo $this->Form->input('city');
		echo $this->Form->input('death_cause');
		echo $this->Form->input('related_person' , array('label' => 'I am this persons'));
		echo $this->Tinymce->input('Post.content', array(
            'label' => 'Message',
            'name' => 'message',
            ),array(
                'language'=>'en'
            ),
            'bbcode'
        );  
                echo $this->Form->input('img',array('type'=>'file'));
                echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$user_id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Memorials'), array('action' => 'index')); ?></li>
	</ul>
</div>
