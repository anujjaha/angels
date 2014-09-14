<div class="memorials view">
<h2><?php echo __('Memorial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middlename'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['middlename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Day'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dob_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Month'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dob_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Year'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dob_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dop Day'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dop_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dop Month'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dop_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dop Year'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['dop_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Death Cause'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['death_cause']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Related Person'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['related_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Viewcount'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['viewcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memorial'), array('action' => 'edit', $memorial['Memorial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memorial'), array('action' => 'delete', $memorial['Memorial']['id']), null, __('Are you sure you want to delete # %s?', $memorial['Memorial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memorials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memorial'), array('action' => 'add')); ?> </li>
	</ul>
</div>
