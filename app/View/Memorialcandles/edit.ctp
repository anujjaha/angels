<div class="memorialcandles form">
<?php echo $this->Form->create('Memorialcandle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Memorialcandle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('memorial_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('candle_id');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Memorialcandle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Memorialcandle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Memorialcandles'), array('action' => 'index')); ?></li>
	</ul>
</div>
