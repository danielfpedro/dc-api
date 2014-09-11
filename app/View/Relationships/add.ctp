<div class="relationships form">
<?php echo $this->Form->create('Relationship'); ?>
	<fieldset>
		<legend><?php echo __('Add Relationship'); ?></legend>
	<?php
		echo $this->Form->input('account_id');
		echo $this->Form->input('account_id2');
		echo $this->Form->input('response1');
		echo $this->Form->input('response2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Relationships'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
