<div class="references index">
	<h2><?php echo __('References'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('publisher'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('volume'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($references as $reference): ?>
	<tr>
		<td><?php echo h($reference['Reference']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reference['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $reference['Fish']['id'])); ?>
		</td>
		<td><?php echo h($reference['Reference']['author']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['year']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['title']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['publisher']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['url']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['volume']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reference['Reference']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reference['Reference']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reference['Reference']['id']), null, __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
