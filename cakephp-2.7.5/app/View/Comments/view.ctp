<div class="comments view">
<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Snippet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Snippet']['id'], array('controller' => 'snippets', 'action' => 'view', $comment['Snippet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comment['Comment']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snippets'), array('controller' => 'snippets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snippet'), array('controller' => 'snippets', 'action' => 'add')); ?> </li>
	</ul>
</div>
