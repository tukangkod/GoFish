<div class="waterTypes form">
<?php echo $this->Form->create('WaterType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Water Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WaterType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WaterType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Water Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('controller' => 'biologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('controller' => 'biologies', 'action' => 'add')); ?> </li>
	</ul>
</div>
