<div class="memorialgifts form">
<?php echo $this->Form->create('Memorialgift'); ?>
	<fieldset>
		<legend><?php echo __('Add Memorialgift'); ?></legend>
	<?php
		echo $this->Form->input('memorial_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('gift_id');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Memorialgifts'), array('action' => 'index')); ?></li>
	</ul>
</div>
