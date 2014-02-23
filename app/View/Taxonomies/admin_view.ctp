<div class="taxonomies view">
<h2><?php echo __('Taxonomy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxonomy['Taxonomy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxonomy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taxonomy['Taxonomy']['name'], array('controller' => 'taxonomies', 'action' => 'view', $taxonomy['Taxonomy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxonomy Classification Id'); ?></dt>
		<dd>
			<?php echo h($taxonomy['Taxonomy']['taxonomy_classification_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($taxonomy['Taxonomy']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Taxonomy'), array('action' => 'edit', $taxonomy['Taxonomy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Taxonomy'), array('action' => 'delete', $taxonomy['Taxonomy']['id']), null, __('Are you sure you want to delete # %s?', $taxonomy['Taxonomy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxonomies'), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Taxonomies'); ?></h3>
	<?php if (!empty($taxonomy['Taxonomy'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Taxonomy Id'); ?></th>
		<th><?php echo __('Taxonomy Classification Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxonomy['Taxonomy'] as $taxonomy): ?>
		<tr>
			<td><?php echo $taxonomy['id']; ?></td>
			<td><?php echo $taxonomy['taxonomy_id']; ?></td>
			<td><?php echo $taxonomy['taxonomy_classification_id']; ?></td>
			<td><?php echo $taxonomy['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'taxonomies', 'action' => 'view', $taxonomy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'taxonomies', 'action' => 'edit', $taxonomy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taxonomies', 'action' => 'delete', $taxonomy['id']), null, __('Are you sure you want to delete # %s?', $taxonomy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
