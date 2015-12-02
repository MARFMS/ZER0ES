<?php require_once("snippets.php") ?>
<?php $this->assign('title', 'Index'); ?>
<div>
	<?php foreach ($snippets as $snippet): ?>
		<div class="snippet_entry" id="entry_border">
			<div class="snippet_content" id="content_border">
				<?php
					// Retrieve all the values
					$id   		 = 	h($snippet['Snippet']['id']);
					$user 		 = 	$this->Html->link($snippet['User']['name'], array('controller' => 'users', 'action' => 'view', $snippet['User']['id']));
					$likes 		 = 	h($snippet['Snippet']['likes']);
					$dislikes 	 =	h($snippet['Snippet']['dislikes']);
					$language    =  h($snippet['Snippet']['language']);
					$description =  h($snippet['Snippet']['description']);
					$content     =  h($snippet['Snippet']['content']);
					$syntax = which_language($snippet['Snippet']['language']);
				?>

				<p><?php echo  $id 	         ?>&nbsp;</p>
				<p><?php echo  $user 	     ?></p>
				<p><?php echo  $likes;    	 ?>&nbsp;</p>
				<p><?php echo  $dislikes; 	 ?>&nbsp;</p>
				<p><?php echo  $language; 	 ?>&nbsp;</p>
				<p><?php echo  $description; ?>&nbsp;</p>

				<pre class='<?php echo $syntax; ?>'><?php echo $content; ?>&nbsp;</pre>
				<br/><br/>
			</div>
		</div>
	<?php endforeach; ?>
</div>
