<div class="taxonomies form">
<?php echo $this->Form->create('Taxonomy'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Taxonomy'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Taxonomy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Taxonomy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
