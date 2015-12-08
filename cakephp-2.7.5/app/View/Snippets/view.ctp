<div class="cont">
	<div class="snippets view">
	<h2><?php echo __('Snippet'); ?></h2>
		<dl>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($snippet['User']['name'], array('controller' => 'users', 'action' => 'view', $snippet['User']['id'])); ?>
				&nbsp;
			</dd>
			</br>
			<dt><?php echo __('Likes'); ?></dt>
			<dd>
				<?php echo h($snippet['Snippet']['likes']); ?>
				&nbsp;
			</dd>
			</br>
			<dt><?php echo __('Dislikes'); ?></dt>
			<dd>
				<?php echo h($snippet['Snippet']['dislikes']); ?>
				&nbsp;
			</dd>
			</br>
			<dt><?php echo __('Language'); ?></dt>
			<dd>
				<?php echo h($snippet['Snippet']['language']); ?>
				&nbsp;
			</dd>
			</br>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($snippet['Snippet']['description']); ?>
				&nbsp;
			</dd>
			</br>
			<dt><?php echo __('Content'); ?></dt>
			<dd>
				<?php echo "<pre style='font-family:Monospace;'>".h($snippet['Snippet']['content'])."</pre>"; ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Share'); ?></dt>
			<dd>
				<?php echo "<p>Copy this URL in your browser bar to view this snippet: </p>"."<a style='margin-left:2em;' href='http://localhost".$this->here."'>localhost".$this->here."</a>"; ?>
				&nbsp;
			</dd>
		</dl>
	</div>

	<div class="related">
		<h3><?php echo __('Tags'); ?></h3>
		<?php if (!empty($snippet['Tag'])): ?>
			<?php echo " | "; ?>
			<?php foreach ($snippet['Tag'] as $tag): ?>
				<?php echo $tag['tag']." | "; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
