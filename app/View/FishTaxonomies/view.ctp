<div class="fishTaxonomies view">
<h2><?php echo __('Fish Taxonomy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fishTaxonomy['FishTaxonomy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fishTaxonomy['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $fishTaxonomy['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxonomy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fishTaxonomy['Taxonomy']['name'], array('controller' => 'taxonomies', 'action' => 'view', $fishTaxonomy['Taxonomy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fish Taxonomy'), array('action' => 'edit', $fishTaxonomy['FishTaxonomy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fish Taxonomy'), array('action' => 'delete', $fishTaxonomy['FishTaxonomy']['id']), null, __('Are you sure you want to delete # %s?', $fishTaxonomy['FishTaxonomy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish Taxonomies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish Taxonomy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
