<div class="usermetas form">
<?php echo $this->Form->create('Usermeta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usermeta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('add_lineone');
		echo $this->Form->input('add_linetwo');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('dob_day');
		echo $this->Form->input('dob_month');
		echo $this->Form->input('dob_year');
		echo $this->Form->input('gender');
		echo $this->Form->input('image');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usermeta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Usermeta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usermetas'), array('action' => 'index')); ?></li>
	</ul>
</div>
