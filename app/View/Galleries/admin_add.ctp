<div class="galleries form">
<?php echo $this->Form->create('Gallery'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Gallery'); ?></legend>
	<?php
		echo $this->Form->input('fish_id');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Galleries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
