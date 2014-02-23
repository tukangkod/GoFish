<div class="fish view">
<h2><?php echo __('Fish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fish['Fish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scientific Name'); ?></dt>
		<dd>
			<?php echo h($fish['Fish']['scientific_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fish['Fish']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fish'), array('action' => 'edit', $fish['Fish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fish'), array('action' => 'delete', $fish['Fish']['id']), null, __('Are you sure you want to delete # %s?', $fish['Fish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Biologies'), array('controller' => 'biologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Biology'), array('controller' => 'biologies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descriptions'), array('controller' => 'descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Description'), array('controller' => 'descriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish Taxonomies'), array('controller' => 'fish_taxonomies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish Taxonomy'), array('controller' => 'fish_taxonomies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Founders'), array('controller' => 'founders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('controller' => 'founders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Morphologicals'), array('controller' => 'morphologicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Morphological'), array('controller' => 'morphologicals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Common Names'), array('controller' => 'common_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Common Name'), array('controller' => 'common_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('controller' => 'references', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('controller' => 'references', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Biologies'); ?></h3>
	<?php if (!empty($fish['Biology'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Biology']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Biology']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Water Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Biology']['water_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $fish['Biology']['description']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Biology'), array('controller' => 'biologies', 'action' => 'edit', $fish['Biology']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Descriptions'); ?></h3>
	<?php if (!empty($fish['Description'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Description']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Description']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
	<?php echo $fish['Description']['summary']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $fish['Description']['description']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Description'), array('controller' => 'descriptions', 'action' => 'edit', $fish['Description']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Fish Taxonomies'); ?></h3>
	<?php if (!empty($fish['FishTaxonomy'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['FishTaxonomy']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['FishTaxonomy']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Taxonomy Id'); ?></dt>
		<dd>
	<?php echo $fish['FishTaxonomy']['taxonomy_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Fish Taxonomy'), array('controller' => 'fish_taxonomies', 'action' => 'edit', $fish['FishTaxonomy']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Founders'); ?></h3>
	<?php if (!empty($fish['Founder'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Founder']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Founder']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $fish['Founder']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
	<?php echo $fish['Founder']['year']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Founder'), array('controller' => 'founders', 'action' => 'edit', $fish['Founder']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Galleries'); ?></h3>
	<?php if (!empty($fish['Gallery'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Gallery']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Gallery']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
	<?php echo $fish['Gallery']['enabled']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Gallery'), array('controller' => 'galleries', 'action' => 'edit', $fish['Gallery']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Morphologicals'); ?></h3>
	<?php if (!empty($fish['Morphological'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Body Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['body_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Mouth Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['mouth_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Head Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['head_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Color Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['color_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Caudal Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['caudal_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Dorsal Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['dorsal_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Scale Type Id'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['scale_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Barbel'); ?></dt>
		<dd>
	<?php echo $fish['Morphological']['barbel']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Morphological'), array('controller' => 'morphologicals', 'action' => 'edit', $fish['Morphological']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Statuses'); ?></h3>
	<?php if (!empty($fish['Status'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $fish['Status']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fish Id'); ?></dt>
		<dd>
	<?php echo $fish['Status']['fish_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Red List Id'); ?></dt>
		<dd>
	<?php echo $fish['Status']['red_list_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Threat Id'); ?></dt>
		<dd>
	<?php echo $fish['Status']['threat_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Status'), array('controller' => 'statuses', 'action' => 'edit', $fish['Status']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Common Names'); ?></h3>
	<?php if (!empty($fish['CommonName'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fish Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Language Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fish['CommonName'] as $commonName): ?>
		<tr>
			<td><?php echo $commonName['id']; ?></td>
			<td><?php echo $commonName['fish_id']; ?></td>
			<td><?php echo $commonName['name']; ?></td>
			<td><?php echo $commonName['country_id']; ?></td>
			<td><?php echo $commonName['language_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'common_names', 'action' => 'view', $commonName['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'common_names', 'action' => 'edit', $commonName['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'common_names', 'action' => 'delete', $commonName['id']), null, __('Are you sure you want to delete # %s?', $commonName['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Common Name'), array('controller' => 'common_names', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($fish['Location'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fish Id'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fish['Location'] as $location): ?>
		<tr>
			<td><?php echo $location['id']; ?></td>
			<td><?php echo $location['fish_id']; ?></td>
			<td><?php echo $location['location']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locations', 'action' => 'view', $location['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locations', 'action' => 'edit', $location['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locations', 'action' => 'delete', $location['id']), null, __('Are you sure you want to delete # %s?', $location['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related References'); ?></h3>
	<?php if (!empty($fish['Reference'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fish Id'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Publisher'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fish['Reference'] as $reference): ?>
		<tr>
			<td><?php echo $reference['id']; ?></td>
			<td><?php echo $reference['fish_id']; ?></td>
			<td><?php echo $reference['author']; ?></td>
			<td><?php echo $reference['year']; ?></td>
			<td><?php echo $reference['title']; ?></td>
			<td><?php echo $reference['publisher']; ?></td>
			<td><?php echo $reference['url']; ?></td>
			<td><?php echo $reference['volume']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'references', 'action' => 'view', $reference['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'references', 'action' => 'edit', $reference['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'references', 'action' => 'delete', $reference['id']), null, __('Are you sure you want to delete # %s?', $reference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reference'), array('controller' => 'references', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
