<div class="artworks view">
<h2><?php  echo __('Artwork');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Url'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['img_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitorsip'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['visitorsip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($artwork['Artist']['id'], array('controller' => 'artists', 'action' => 'view', $artwork['Artist']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artwork'), array('action' => 'edit', $artwork['Artwork']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artwork'), array('action' => 'delete', $artwork['Artwork']['id']), null, __('Are you sure you want to delete # %s?', $artwork['Artwork']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Styles');?></h3>
	<?php if (!empty($artwork['Style'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Style'); ?></th>
		<th><?php echo __('Artwork Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($artwork['Style'] as $style): ?>
		<tr>
			<td><?php echo $style['id'];?></td>
			<td><?php echo $style['style'];?></td>
			<td><?php echo $style['artwork_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'styles', 'action' => 'view', $style['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'styles', 'action' => 'edit', $style['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'styles', 'action' => 'delete', $style['id']), null, __('Are you sure you want to delete # %s?', $style['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
