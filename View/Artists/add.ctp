<div class="artists form">
<?php echo $this->Form->create('Artist');?>
	<fieldset>
		<legend><?php echo __('Add Artist'); ?></legend>
	<?php
		echo $this->Form->input('artist_firstname');
		echo $this->Form->input('artist_lastname');
		echo $this->Form->input('artistic_name');
		echo $this->Form->input('about');
		echo $this->Form->input('user_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('city');
		echo $this->Form->input('postal_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artists'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('controller' => 'artworks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('controller' => 'artworks', 'action' => 'add')); ?> </li>
	</ul>
</div>
