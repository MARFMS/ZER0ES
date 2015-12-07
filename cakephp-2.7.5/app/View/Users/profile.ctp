<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php if ( $user['User']['image'] != null ): ?>
				<?php echo $this->Html->image('user_imgs/' . $user['User']['image'], array('alt' => 'CakePHP', 'style'=>'height:250px; width:250px; float:left;')); ?>
			<?php endif; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snippets'), array('controller' => 'snippets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snippet'), array('controller' => 'snippets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Snippets'); ?></h3>
	<?php if (!empty($user['Snippet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Likes'); ?></th>
		<th><?php echo __('Dislikes'); ?></th>
		<th><?php echo __('Language'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Snippet'] as $snippet): ?>
		<tr>
			<td><?php echo $snippet['id']; ?></td>
			<td><?php echo $snippet['user_id']; ?></td>
			<td><?php echo $snippet['likes']; ?></td>
			<td><?php echo $snippet['dislikes']; ?></td>
			<td><?php echo $snippet['language']; ?></td>
			<td><?php echo $snippet['description']; ?></td>
			<td><?php echo $snippet['content']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'snippets', 'action' => 'view', $snippet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'snippets', 'action' => 'edit', $snippet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'snippets', 'action' => 'delete', $snippet['id']), array('confirm' => __('Are you sure you want to delete # %s?', $snippet['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Snippet'), array('controller' => 'snippets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
