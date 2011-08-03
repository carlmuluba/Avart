<div class="artworks form">
<?php echo $this->Form->create('Artwork');?>
	<fieldset>
		<legend><?php echo __('Add Artwork'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
