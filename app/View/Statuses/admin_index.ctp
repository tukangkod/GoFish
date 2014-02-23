<div class="statuses index">
	<h2><?php echo __('Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('red_list_id'); ?></th>
			<th><?php echo $this->Paginator->sort('threat_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($statuses as $status): ?>
	<tr>
		<td><?php echo h($status['Status']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($status['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $status['Fish']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($status['RedList']['name'], array('controller' => 'red_lists', 'action' => 'view', $status['RedList']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($status['Threat']['name'], array('controller' => 'threats', 'action' => 'view', $status['Threat']['int'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $status['Status']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $status['Status']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $status['Status']['id']), null, __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Red Lists'), array('controller' => 'red_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Red List'), array('controller' => 'red_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Threats'), array('controller' => 'threats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Threat'), array('controller' => 'threats', 'action' => 'add')); ?> </li>
	</ul>
</div>
