<div class="commonNames view">
<h2><?php echo __('Common Name'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commonName['CommonName']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commonName['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $commonName['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($commonName['CommonName']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commonName['Country']['name'], array('controller' => 'countries', 'action' => 'view', $commonName['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commonName['Language']['name'], array('controller' => 'languages', 'action' => 'view', $commonName['Language']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Common Name'), array('action' => 'edit', $commonName['CommonName']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Common Name'), array('action' => 'delete', $commonName['CommonName']['id']), null, __('Are you sure you want to delete # %s?', $commonName['CommonName']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Common Names'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Common Name'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>
