<div class="bodyTypes view">
<h2><?php echo __('Body Type'); ?></h2>
	<dl>
		<dt><?php echo __('Morphological'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bodyType['Morphological']['id'], array('controller' => 'morphologicals', 'action' => 'view', $bodyType['Morphological']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bodyType['BodyType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($bodyType['BodyType']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($bodyType['BodyType']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Body Type'), array('action' => 'edit', $bodyType['BodyType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Body Type'), array('action' => 'delete', $bodyType['BodyType']['id']), null, __('Are you sure you want to delete # %s?', $bodyType['BodyType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Body Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
	</ul>
</div>
