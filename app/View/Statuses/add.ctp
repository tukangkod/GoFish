<div class="statuses form">
<?php echo $this->Form->create('Status'); ?>
	<fieldset>
		<legend><?php echo __('Add Status'); ?></legend>
	<?php
		echo $this->Form->input('fish_id');
		echo $this->Form->input('red_list_id');
		echo $this->Form->input('threat_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Red Lists'), array('controller' => 'red_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Red List'), array('controller' => 'red_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Threats'), array('controller' => 'threats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Threat'), array('controller' => 'threats', 'action' => 'add')); ?> </li>
	</ul>
</div>
