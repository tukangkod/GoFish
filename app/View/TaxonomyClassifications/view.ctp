<div class="taxonomyClassifications view">
<h2><?php echo __('Taxonomy Classification'); ?></h2>
	<dl>
		<dt><?php echo __('Taxonomy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taxonomyClassification['Taxonomy']['name'], array('controller' => 'taxonomies', 'action' => 'view', $taxonomyClassification['Taxonomy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Name'); ?></dt>
		<dd>
			<?php echo h($taxonomyClassification['TaxonomyClassification']['class_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Taxonomy Classification'), array('action' => 'edit', $taxonomyClassification['TaxonomyClassification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Taxonomy Classification'), array('action' => 'delete', $taxonomyClassification['TaxonomyClassification']['id']), null, __('Are you sure you want to delete # %s?', $taxonomyClassification['TaxonomyClassification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomy Classifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy Classification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
