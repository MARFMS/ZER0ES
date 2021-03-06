<div class="snippets index">
	<h2><?php echo __('Admin Snippets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('likes'); ?></th>
			<th><?php echo $this->Paginator->sort('dislikes'); ?></th>
			<th><?php echo $this->Paginator->sort('language'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($snippets as $snippet): ?>
	<tr>
		<td><?php echo h($snippet['Snippet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($snippet['User']['name'], array('controller' => 'users', 'action' => 'view', $snippet['User']['id'])); ?>
		</td>
		<td><?php echo h($snippet['Snippet']['likes']); ?>&nbsp;</td>
		<td><?php echo h($snippet['Snippet']['dislikes']); ?>&nbsp;</td>
		<td><?php echo h($snippet['Snippet']['language']); ?>&nbsp;</td>
		<td><?php echo h($snippet['Snippet']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $snippet['Snippet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $snippet['Snippet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $snippet['Snippet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $snippet['Snippet']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Snippet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
