<div class="languages form">
<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Language'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('native_name');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Language.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Language.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Common Names'), array('controller' => 'common_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Common Name'), array('controller' => 'common_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
