<div class="commonNames index">
	<h2><?php echo __('Common Names'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($commonNames as $commonName): ?>
	<tr>
		<td><?php echo h($commonName['CommonName']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commonName['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $commonName['Fish']['id'])); ?>
		</td>
		<td><?php echo h($commonName['CommonName']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commonName['Country']['name'], array('controller' => 'countries', 'action' => 'view', $commonName['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($commonName['Language']['name'], array('controller' => 'languages', 'action' => 'view', $commonName['Language']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $commonName['CommonName']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $commonName['CommonName']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $commonName['CommonName']['id']), null, __('Are you sure you want to delete # %s?', $commonName['CommonName']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Common Name'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>
