<div class="protos form">
<?php echo $this->Form->create('Proto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Proto'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Protos'), array('action' => 'index')); ?></li>
	</ul>
</div>
