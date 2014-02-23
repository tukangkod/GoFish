<div class="taxonomies form">
<?php echo $this->Form->create('Taxonomy'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Taxonomy'); ?></legend>
	<?php
		echo $this->Form->input('taxonomy_id');
		echo $this->Form->input('taxonomy_classification_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Taxonomies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
