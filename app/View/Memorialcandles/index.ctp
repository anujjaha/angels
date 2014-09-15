<div class="memorialcandles index">
	<h2><?php echo __('Memorialcandles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('memorial_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('candle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($memorialcandles as $memorialcandle): ?>
	<tr>
		<td><?php echo h($memorialcandle['Memorialcandle']['id']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['memorial_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['candle_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['message']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['status']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['created']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorialcandle']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memorialcandle['Memorialcandle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memorialcandle['Memorialcandle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memorialcandle['Memorialcandle']['id']), null, __('Are you sure you want to delete # %s?', $memorialcandle['Memorialcandle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Memorialcandle'), array('action' => 'add')); ?></li>
	</ul>
</div>
