<div class="gifts form">
<?php echo $this->Form->create('Gift'); ?>
	<fieldset>
		<legend><?php echo __('Add Gift'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('image');
		echo $this->Form->input('status');
                echo $this->Tinymce->input('Post.content', array(
            'label' => 'Content'
            ),array(
                'language'=>'en'
            ),
            'advanced'
        ); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gifts'), array('action' => 'index')); ?></li>
	</ul>
</div>
