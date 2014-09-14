<div class="memorials index">
	<h2><?php echo __('Memorials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('middlename'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_day'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_month'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_year'); ?></th>
			<th><?php echo $this->Paginator->sort('dop_day'); ?></th>
			<th><?php echo $this->Paginator->sort('dop_month'); ?></th>
			<th><?php echo $this->Paginator->sort('dop_year'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('death_cause'); ?></th>
			<th><?php echo $this->Paginator->sort('related_person'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('img'); ?></th>
			<th><?php echo $this->Paginator->sort('viewcount'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($memorials as $memorial): ?>
	<tr>
		<td><?php echo h($memorial['Memorial']['id']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['title']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['middlename']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dob_day']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dob_month']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dob_year']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dop_day']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dop_month']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['dop_year']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['city']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['death_cause']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['related_person']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['message']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['img']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['viewcount']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['status']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['created']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memorial['Memorial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memorial['Memorial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memorial['Memorial']['id']), null, __('Are you sure you want to delete # %s?', $memorial['Memorial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Memorial'), array('action' => 'add')); ?></li>
	</ul>
</div>
