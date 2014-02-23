<div class="founders view">
<h2><?php echo __('Founder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($founder['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $founder['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Founder'), array('action' => 'edit', $founder['Founder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Founder'), array('action' => 'delete', $founder['Founder']['id']), null, __('Are you sure you want to delete # %s?', $founder['Founder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Founders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
	</ul>
</div>
