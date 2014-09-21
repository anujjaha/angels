<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
        
	echo $this->Form->input('Usermeta.firstname');	
	echo $this->Form->input('Usermeta.middlename');	
	echo $this->Form->input('Usermeta.lastname');
        echo $this->Form->input('User.username');
	echo $this->Form->input('User.password');
	echo $this->Form->input('Usermeta.add_lineone');	
	echo $this->Form->input('Usermeta.add_linetwo');	
	echo $this->Form->input('Usermeta.city');	
	echo $this->Form->input('Usermeta.state');	
	echo $this->Form->input('Usermeta.zip');	
	echo $this->Form->input('Usermeta.dob_day');	
        
                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
