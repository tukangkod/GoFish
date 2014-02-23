<div class="morphologicals view">
<h2><?php echo __('Morphological'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($morphological['Morphological']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['Fish']['name'], array('controller' => 'fish', 'action' => 'view', $morphological['Fish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['BodyType']['name'], array('controller' => 'body_types', 'action' => 'view', $morphological['BodyType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mouth Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['MouthType']['name'], array('controller' => 'mouth_types', 'action' => 'view', $morphological['MouthType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['HeadType']['name'], array('controller' => 'head_types', 'action' => 'view', $morphological['HeadType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['Color']['name'], array('controller' => 'colors', 'action' => 'view', $morphological['Color']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caudal Fin Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['CaudalFinType']['name'], array('controller' => 'caudal_fin_types', 'action' => 'view', $morphological['CaudalFinType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dorsal Fin Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['DorsalFinType']['name'], array('controller' => 'dorsal_fin_types', 'action' => 'view', $morphological['DorsalFinType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scale Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($morphological['ScaleType']['name'], array('controller' => 'scale_types', 'action' => 'view', $morphological['ScaleType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barbel'); ?></dt>
		<dd>
			<?php echo h($morphological['Morphological']['barbel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Morphological'), array('action' => 'edit', $morphological['Morphological']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Morphological'), array('action' => 'delete', $morphological['Morphological']['id']), null, __('Are you sure you want to delete # %s?', $morphological['Morphological']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Body Types'), array('controller' => 'body_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body Type'), array('controller' => 'body_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mouth Types'), array('controller' => 'mouth_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mouth Type'), array('controller' => 'mouth_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Head Types'), array('controller' => 'head_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Head Type'), array('controller' => 'head_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caudal Fin Types'), array('controller' => 'caudal_fin_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caudal Fin Type'), array('controller' => 'caudal_fin_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dorsal Fin Types'), array('controller' => 'dorsal_fin_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dorsal Fin Type'), array('controller' => 'dorsal_fin_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scale Types'), array('controller' => 'scale_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scale Type'), array('controller' => 'scale_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
