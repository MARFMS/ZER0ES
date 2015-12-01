<div class="snippets index">
	<?php foreach ($snippets as $snippet): ?>
		<pre><?php echo h($snippet['Snippet']['id']); ?>&nbsp;</pre>
		<pre>
			<?php echo $this->Html->link($snippet['User']['name'], array('controller' => 'users', 'action' => 'view', $snippet['User']['id'])); ?>
		</pre>
		<pre><?php echo h($snippet['Snippet']['likes']); ?>&nbsp;</pre>
		<pre><?php echo h($snippet['Snippet']['dislikes']); ?>&nbsp;</pre>
		<pre><?php echo h($snippet['Snippet']['language']); ?>&nbsp;</pre>
		<pre><?php echo h($snippet['Snippet']['description']); ?>&nbsp;</pre>
		<pre><?php echo h($snippet['Snippet']['content']); ?>&nbsp;</pre>
		<br/><br/><br/><br/>
<?php endforeach; ?>
</div>
