<div class="usermetas index">
	<h2><?php echo __('Usermetas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('middlename'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('add_lineone'); ?></th>
			<th><?php echo $this->Paginator->sort('add_linetwo'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_day'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_month'); ?></th>
			<th><?php echo $this->Paginator->sort('dob_year'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usermetas as $usermeta): ?>
	<tr>
		<td><?php echo h($usermeta['Usermeta']['id']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['middlename']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['add_lineone']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['add_linetwo']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['city']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['state']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['zip']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['dob_day']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['dob_month']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['dob_year']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['gender']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['image']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['flag']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['created']); ?>&nbsp;</td>
		<td><?php echo h($usermeta['Usermeta']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usermeta['Usermeta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usermeta['Usermeta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usermeta['Usermeta']['id']), null, __('Are you sure you want to delete # %s?', $usermeta['Usermeta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Usermeta'), array('action' => 'add')); ?></li>
	</ul>
</div>
