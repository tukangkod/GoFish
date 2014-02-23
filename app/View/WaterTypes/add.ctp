<div class="waterTypes form">
<?php echo $this->Form->create('WaterType'); ?>
	<fieldset>
		<legend><?php echo __('Add Water Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Water Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('controller' => 'biologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('controller' => 'biologies', 'action' => 'add')); ?> </li>
	</ul>
</div>
