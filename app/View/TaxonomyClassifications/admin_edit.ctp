<div class="taxonomyClassifications form">
<?php echo $this->Form->create('TaxonomyClassification'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Taxonomy Classification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('class_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TaxonomyClassification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TaxonomyClassification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Taxonomy Classifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
