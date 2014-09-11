<div class="relationships view">
<h2><?php echo __('Relationship'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($relationship['Relationship']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($relationship['Account']['id'], array('controller' => 'accounts', 'action' => 'view', $relationship['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Id2'); ?></dt>
		<dd>
			<?php echo h($relationship['Relationship']['account_id2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response1'); ?></dt>
		<dd>
			<?php echo h($relationship['Relationship']['response1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response2'); ?></dt>
		<dd>
			<?php echo h($relationship['Relationship']['response2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Relationship'), array('action' => 'edit', $relationship['Relationship']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Relationship'), array('action' => 'delete', $relationship['Relationship']['id']), array(), __('Are you sure you want to delete # %s?', $relationship['Relationship']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationships'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
