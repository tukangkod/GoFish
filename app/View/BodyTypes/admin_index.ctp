<div class="bodyTypes index">
	<h2><?php echo __('Body Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('enabled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bodyTypes as $bodyType): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($bodyType['Morphological']['id'], array('controller' => 'morphologicals', 'action' => 'view', $bodyType['Morphological']['id'])); ?>
		</td>
		<td><?php echo h($bodyType['BodyType']['name']); ?>&nbsp;</td>
		<td><?php echo h($bodyType['BodyType']['image']); ?>&nbsp;</td>
		<td><?php echo h($bodyType['BodyType']['enabled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bodyType['BodyType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bodyType['BodyType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bodyType['BodyType']['id']), null, __('Are you sure you want to delete # %s?', $bodyType['BodyType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Body Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
	</ul>
</div>
