<div class="tributes view">
<h2><?php echo __('Tribute'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memorial Id'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['memorial_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tribute['Tribute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tribute'), array('action' => 'edit', $tribute['Tribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tribute'), array('action' => 'delete', $tribute['Tribute']['id']), null, __('Are you sure you want to delete # %s?', $tribute['Tribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tribute'), array('action' => 'add')); ?> </li>
	</ul>
</div>
