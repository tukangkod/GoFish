<div class="references form">
<?php echo $this->Form->create('Reference'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Reference'); ?></legend>
	<?php
		echo $this->Form->input('fish_id');
		echo $this->Form->input('author');
		echo $this->Form->input('year');
		echo $this->Form->input('title');
		echo $this->Form->input('publisher');
		echo $this->Form->input('url');
		echo $this->Form->input('volume');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
