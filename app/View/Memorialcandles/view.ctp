<div class="memorialcandles view">
<h2><?php echo __('Memorialcandle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memorial Id'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['memorial_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candle Id'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['candle_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($memorialcandle['Memorialcandle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memorialcandle'), array('action' => 'edit', $memorialcandle['Memorialcandle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memorialcandle'), array('action' => 'delete', $memorialcandle['Memorialcandle']['id']), null, __('Are you sure you want to delete # %s?', $memorialcandle['Memorialcandle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memorialcandles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memorialcandle'), array('action' => 'add')); ?> </li>
	</ul>
</div>
