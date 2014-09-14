<div class="memorials form">
<?php echo $this->Form->create('Memorial'); ?>
	<fieldset>
		<legend><?php echo __('Add Memorial'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('dob_day');
		echo $this->Form->input('dob_month');
		echo $this->Form->input('dob_year');
		echo $this->Form->input('dop_day');
		echo $this->Form->input('dop_month');
		echo $this->Form->input('dop_year');
		echo $this->Form->input('city');
		echo $this->Form->input('death_cause');
		echo $this->Form->input('related_person');
		echo $this->Form->input('message');
		echo $this->Form->input('img');
		echo $this->Form->input('viewcount');
		echo $this->Form->input('status');
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
