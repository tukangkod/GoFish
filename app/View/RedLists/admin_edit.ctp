<div class="redLists form">
<?php echo $this->Form->create('RedList'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Red List'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RedList.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RedList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Red Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
