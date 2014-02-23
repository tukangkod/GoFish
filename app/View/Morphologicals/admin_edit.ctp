<div class="morphologicals form">
<?php echo $this->Form->create('Morphological'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Morphological'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fish_id');
		echo $this->Form->input('body_type_id');
		echo $this->Form->input('mouth_type_id');
		echo $this->Form->input('head_type_id');
		echo $this->Form->input('color_id');
		echo $this->Form->input('caudal_fin_type_id');
		echo $this->Form->input('dorsal_fin_type_id');
		echo $this->Form->input('scale_type_id');
		echo $this->Form->input('barbel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Morphological.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Morphological.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Body Types'), array('controller' => 'body_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body Type'), array('controller' => 'body_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mouth Types'), array('controller' => 'mouth_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mouth Type'), array('controller' => 'mouth_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Head Types'), array('controller' => 'head_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Head Type'), array('controller' => 'head_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caudal Fin Types'), array('controller' => 'caudal_fin_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caudal Fin Type'), array('controller' => 'caudal_fin_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dorsal Fin Types'), array('controller' => 'dorsal_fin_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dorsal Fin Type'), array('controller' => 'dorsal_fin_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scale Types'), array('controller' => 'scale_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scale Type'), array('controller' => 'scale_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
