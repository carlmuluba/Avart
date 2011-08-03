<div class="artists view">
<h2><?php  echo __('Artist');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist Firstname'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['artist_firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist Lastname'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['artist_lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artistic Name'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['artistic_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('About'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['about']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artist['User']['id'], array('controller' => 'users', 'action' => 'view', $artist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artist['Country']['name'], array('controller' => 'countries', 'action' => 'view', $artist['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($artist['Artist']['postal_code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artist'), array('action' => 'edit', $artist['Artist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artist'), array('action' => 'delete', $artist['Artist']['id']), null, __('Are you sure you want to delete # %s?', $artist['Artist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('controller' => 'artworks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('controller' => 'artworks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artworks');?></h3>
	<?php if (!empty($artist['Artwork'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Img Url'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Visitorsip'); ?></th>
		<th><?php echo __('Artist Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($artist['Artwork'] as $artwork): ?>
		<tr>
			<td><?php echo $artwork['id'];?></td>
			<td><?php echo $artwork['img_url'];?></td>
			<td><?php echo $artwork['title'];?></td>
			<td><?php echo $artwork['price'];?></td>
			<td><?php echo $artwork['notes'];?></td>
			<td><?php echo $artwork['type'];?></td>
			<td><?php echo $artwork['category'];?></td>
			<td><?php echo $artwork['created'];?></td>
			<td><?php echo $artwork['modified'];?></td>
			<td><?php echo $artwork['visitorsip'];?></td>
			<td><?php echo $artwork['artist_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artworks', 'action' => 'view', $artwork['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artworks', 'action' => 'edit', $artwork['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artworks', 'action' => 'delete', $artwork['id']), null, __('Are you sure you want to delete # %s?', $artwork['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artwork'), array('controller' => 'artworks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
