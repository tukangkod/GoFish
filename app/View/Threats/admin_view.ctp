<div class="threats view">
<h2><?php echo __('Threat'); ?></h2>
	<dl>
		<dt><?php echo __('Int'); ?></dt>
		<dd>
			<?php echo h($threat['Threat']['int']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($threat['Threat']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Threat'), array('action' => 'edit', $threat['Threat']['int'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Threat'), array('action' => 'delete', $threat['Threat']['int']), null, __('Are you sure you want to delete # %s?', $threat['Threat']['int'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Threats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Threat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Statuses'); ?></h3>
	<?php if (!empty($threat['Status'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fish Id'); ?></th>
		<th><?php echo __('Red List Id'); ?></th>
		<th><?php echo __('Threat Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($threat['Status'] as $status): ?>
		<tr>
			<td><?php echo $status['id']; ?></td>
			<td><?php echo $status['fish_id']; ?></td>
			<td><?php echo $status['red_list_id']; ?></td>
			<td><?php echo $status['threat_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'statuses', 'action' => 'view', $status['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'statuses', 'action' => 'edit', $status['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'statuses', 'action' => 'delete', $status['id']), null, __('Are you sure you want to delete # %s?', $status['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
