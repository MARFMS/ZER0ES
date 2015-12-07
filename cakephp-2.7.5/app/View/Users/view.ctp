<div class="cont">

	<div class="users view">
	<h2><?php echo __($user['User']['username']); ?></h2>
		<dl>
			<dd>
				<?php if ( $user['User']['image'] != null ): ?>
					<?php echo $this->Html->image('user_imgs/' . $user['User']['image'], array('alt' => 'CakePHP', 'class' => 'user_img')); ?>
				<?php endif; ?>
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

			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($user['User']['email']); ?>
				&nbsp;
			</dd>

		</dl>
	</div>

	<div class="related">
		<h3><?php echo __($user['User']['username']."'s Snippets"); ?></h3>
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
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>

</div>