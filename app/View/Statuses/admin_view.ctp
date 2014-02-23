<div class="statuses view">
<h2><?php echo __('Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($status['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $status['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Red List'); ?></dt>
		<dd>
			<?php echo $this->Html->link($status['RedList']['name'], array('controller' => 'red_lists', 'action' => 'view', $status['RedList']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Threat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($status['Threat']['name'], array('controller' => 'threats', 'action' => 'view', $status['Threat']['int'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), null, __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Red Lists'), array('controller' => 'red_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Red List'), array('controller' => 'red_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Threats'), array('controller' => 'threats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Threat'), array('controller' => 'threats', 'action' => 'add')); ?> </li>
	</ul>
</div>
