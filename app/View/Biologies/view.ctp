<div class="biologies view">
<h2><?php echo __('Biology'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($biology['Biology']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($biology['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $biology['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Water Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($biology['WaterType']['name'], array('controller' => 'water_types', 'action' => 'view', $biology['WaterType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($biology['Biology']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Biology'), array('action' => 'edit', $biology['Biology']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Biology'), array('action' => 'delete', $biology['Biology']['id']), null, __('Are you sure you want to delete # %s?', $biology['Biology']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Water Types'), array('controller' => 'water_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Water Type'), array('controller' => 'water_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
