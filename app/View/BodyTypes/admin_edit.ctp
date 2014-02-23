<div class="bodyTypes form">
<?php echo $this->Form->create('BodyType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Body Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BodyType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BodyType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Body Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
	</ul>
</div>
