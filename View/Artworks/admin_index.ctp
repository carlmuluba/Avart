<div class="artworks index">
	<h2><?php echo __('Artworks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('img_url');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('visitorsip');?></th>
			<th><?php echo $this->Paginator->sort('artist_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($artworks as $artwork): ?>
	<tr>
		<td><?php echo h($artwork['Artwork']['id']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['img_url']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['title']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['price']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['notes']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['type']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['category']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['created']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['modified']); ?>&nbsp;</td>
		<td><?php echo h($artwork['Artwork']['visitorsip']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($artwork['Artist']['id'], array('controller' => 'artists', 'action' => 'view', $artwork['Artist']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $artwork['Artwork']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $artwork['Artwork']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $artwork['Artwork']['id']), null, __('Are you sure you want to delete # %s?', $artwork['Artwork']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Artwork'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
