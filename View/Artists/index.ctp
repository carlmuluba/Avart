<div class="artists index">
	<h2><?php echo __('Artists');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('artist_firstname');?></th>
			<th><?php echo $this->Paginator->sort('artist_lastname');?></th>
			<th><?php echo $this->Paginator->sort('artistic_name');?></th>
			<th><?php echo $this->Paginator->sort('about');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('postal_code');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($artists as $artist): ?>
	<tr>
		<td><?php echo h($artist['Artist']['id']); ?>&nbsp;</td>
		<td><?php echo h($artist['Artist']['artist_firstname']); ?>&nbsp;</td>
		<td><?php echo h($artist['Artist']['artist_lastname']); ?>&nbsp;</td>
		<td><?php echo h($artist['Artist']['artistic_name']); ?>&nbsp;</td>
		<td><?php echo h($artist['Artist']['about']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($artist['User']['id'], array('controller' => 'users', 'action' => 'view', $artist['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($artist['Country']['name'], array('controller' => 'countries', 'action' => 'view', $artist['Country']['id'])); ?>
		</td>
		<td><?php echo h($artist['Artist']['city']); ?>&nbsp;</td>
		<td><?php echo h($artist['Artist']['postal_code']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $artist['Artist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $artist['Artist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $artist['Artist']['id']), null, __('Are you sure you want to delete # %s?', $artist['Artist']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Artist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('controller' => 'artworks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('controller' => 'artworks', 'action' => 'add')); ?> </li>
	</ul>
</div>
