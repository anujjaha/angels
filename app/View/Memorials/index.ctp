<div class="memorialcandles index">
	<h2><?php echo __('Memorials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('death_cause'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($memorials as $memorialcandle): ?>
	<tr>
		<td><?php echo h($memorialcandle['Memorial']['id']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['title']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['death_cause']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['status']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['created']); ?>&nbsp;</td>
		<td><?php echo h($memorialcandle['Memorial']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memorialcandle['Memorial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memorialcandle['Memorial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memorialcandle['Memorial']['id']), null, __('Are you sure you want to delete # %s?', $memorialcandle['Memorial']['id'])); ?>
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
