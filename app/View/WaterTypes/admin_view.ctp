<div class="waterTypes view">
<h2><?php echo __('Water Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($waterType['WaterType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($waterType['WaterType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Water Type'), array('action' => 'edit', $waterType['WaterType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Water Type'), array('action' => 'delete', $waterType['WaterType']['id']), null, __('Are you sure you want to delete # %s?', $waterType['WaterType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Water Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Water Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('controller' => 'biologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('controller' => 'biologies', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Biologies'); ?></h3>
	<?php if (!empty($waterType['Biology'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $waterType['Biology']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $waterType['Biology']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Water Type Id'); ?></dt>
		<dd>
	<?php echo $waterType['Biology']['water_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $waterType['Biology']['description']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Biology'), array('controller' => 'biologies', 'action' => 'edit', $waterType['Biology']['id'])); ?></li>
			</ul>
		</div>
	</div>
	