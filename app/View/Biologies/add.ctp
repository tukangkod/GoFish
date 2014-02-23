<div class="biologies form">
<?php echo $this->Form->create('Biology'); ?>
	<fieldset>
		<legend><?php echo __('Add Biology'); ?></legend>
	<?php
		echo $this->Form->input('fish_id');
		echo $this->Form->input('water_type_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Biologies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Water Types'), array('controller' => 'water_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Water Type'), array('controller' => 'water_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
