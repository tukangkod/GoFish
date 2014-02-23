<div class="descriptions form">
<?php echo $this->Form->create('Description'); ?>
	<fieldset>
		<legend><?php echo __('Edit Description'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fish_id');
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Description.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Description.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Descriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
