<div class="artworks form">
<?php echo $this->Form->create('Artwork');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Artwork'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('img_url');
		echo $this->Form->input('title');
		echo $this->Form->input('price');
		echo $this->Form->input('notes');
		echo $this->Form->input('type');
		echo $this->Form->input('category');
		echo $this->Form->input('visitorsip');
		echo $this->Form->input('artist_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Artwork.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Artwork.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
