<div class="founders index">
	<h2><?php echo __('Founders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($founders as $founder): ?>
	<tr>
		<td><?php echo h($founder['Founder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($founder['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $founder['Fish']['id'])); ?>
		</td>
		<td><?php echo h($founder['Founder']['name']); ?>&nbsp;</td>
		<td><?php echo h($founder['Founder']['year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $founder['Founder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $founder['Founder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $founder['Founder']['id']), null, __('Are you sure you want to delete # %s?', $founder['Founder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Founder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
