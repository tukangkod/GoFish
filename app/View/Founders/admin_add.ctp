<div class="founders form">
<?php echo $this->Form->create('Founder'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Founder'); ?></legend>
	<?php
		echo $this->Form->input('fish_id');
		echo $this->Form->input('name');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Founders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
