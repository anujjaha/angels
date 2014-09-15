<div class="memorialgifts index">
	<h2><?php echo __('Memorialgifts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('memorial_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gift_id'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($memorialgifts as $memorialgift): ?>
	<tr>
		<td><?php echo h($memorialgift['Memorialgift']['id']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['memorial_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['gift_id']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['message']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['status']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['created']); ?>&nbsp;</td>
		<td><?php echo h($memorialgift['Memorialgift']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memorialgift['Memorialgift']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memorialgift['Memorialgift']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memorialgift['Memorialgift']['id']), null, __('Are you sure you want to delete # %s?', $memorialgift['Memorialgift']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Memorialgift'), array('action' => 'add')); ?></li>
	</ul>
</div>
