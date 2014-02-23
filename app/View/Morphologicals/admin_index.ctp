<div class="morphologicals index">
	<h2><?php echo __('Morphologicals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('body_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mouth_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('head_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('color_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caudal_fin_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dorsal_fin_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('scale_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('barbel'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($morphologicals as $morphological): ?>
	<tr>
		<td><?php echo h($morphological['Morphological']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($morphological['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $morphological['Fish']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['BodyType']['name'], array('controller' => 'body_types', 'action' => 'view', $morphological['BodyType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['MouthType']['name'], array('controller' => 'mouth_types', 'action' => 'view', $morphological['MouthType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['HeadType']['name'], array('controller' => 'head_types', 'action' => 'view', $morphological['HeadType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['Color']['name'], array('controller' => 'colors', 'action' => 'view', $morphological['Color']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['CaudalFinType']['name'], array('controller' => 'caudal_fin_types', 'action' => 'view', $morphological['CaudalFinType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['DorsalFinType']['name'], array('controller' => 'dorsal_fin_types', 'action' => 'view', $morphological['DorsalFinType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($morphological['ScaleType']['name'], array('controller' => 'scale_types', 'action' => 'view', $morphological['ScaleType']['id'])); ?>
		</td>
		<td><?php echo h($morphological['Morphological']['barbel']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $morphological['Morphological']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $morphological['Morphological']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $morphological['Morphological']['id']), null, __('Are you sure you want to delete # %s?', $morphological['Morphological']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Morphological'), array('action' => 'add')); ?></li>
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
