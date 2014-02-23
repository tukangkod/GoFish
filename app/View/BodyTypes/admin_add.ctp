<div class="bodyTypes form">
<?php echo $this->Form->create('BodyType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Body Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('image');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Body Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
	</ul>
</div>
