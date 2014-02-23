<div class="fishTaxonomies form">
<?php echo $this->Form->create('FishTaxonomy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fish Taxonomy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fish_id');
		echo $this->Form->input('taxonomy_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FishTaxonomy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FishTaxonomy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fish Taxonomies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
