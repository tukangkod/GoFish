<div class="fish index">
	<h2><?php echo __('Fish'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('scientific_name'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fish as $fish): ?>
	<tr>
		<td><?php echo h($fish['Fish']['id']); ?>&nbsp;</td>
		<td><?php echo h($fish['Fish']['scientific_name']); ?>&nbsp;</td>
		<td><?php echo h($fish['Fish']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fish['Fish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fish['Fish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fish['Fish']['id']), null, __('Are you sure you want to delete # %s?', $fish['Fish']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Fish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('controller' => 'biologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('controller' => 'biologies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descriptions'), array('controller' => 'descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Description'), array('controller' => 'descriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish Taxonomies'), array('controller' => 'fish_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish Taxonomy'), array('controller' => 'fish_taxonomies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Founders'), array('controller' => 'founders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('controller' => 'founders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Common Names'), array('controller' => 'common_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Common Name'), array('controller' => 'common_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('controller' => 'references', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('controller' => 'references', 'action' => 'add')); ?> </li>
	</ul>
</div>
