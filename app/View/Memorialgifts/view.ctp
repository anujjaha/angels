<div class="memorialgifts view">
<h2><?php echo __('Memorialgift'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memorial Id'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['memorial_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gift Id'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['gift_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($memorialgift['Memorialgift']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memorialgift'), array('action' => 'edit', $memorialgift['Memorialgift']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memorialgift'), array('action' => 'delete', $memorialgift['Memorialgift']['id']), null, __('Are you sure you want to delete # %s?', $memorialgift['Memorialgift']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memorialgifts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memorialgift'), array('action' => 'add')); ?> </li>
	</ul>
</div>
