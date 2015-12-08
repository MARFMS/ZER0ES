<?php require_once("snippets.php") ?>
<?php $this->assign('title', 'Index'); ?>
<?php $var=0;?>
<div class="grid js-masonry"  data-masonry-options='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>	
	<?php foreach ($snippets as $snippet):
		$var++;
		// Retrieve all the values
		$id= h($snippet['Snippet']['id']);	// Not necessary
		$user =	$this->Html->link(bracketize($snippet['User']['username']), array('controller' => 'users', 'action' => 'view', $snippet['User']['id']));
		$likes=h($snippet['Snippet']['likes']);
		$dislikes=h($snippet['Snippet']['dislikes']);
		$language=h($snippet['Snippet']['language']);
		$description=h($snippet['Snippet']['description']);
		$content=h($snippet['Snippet']['content']);
		$username=bracketize($snippet['User']['username']);
		$syntax=which_language($snippet['Snippet']['language']);
		$image="user_imgs/" . $snippet['User']['image'];
		$comments=$snippet['Comment'];
	?>
	<?php if ($var%3==1){echo '<div class="grid-item">';}
	else{
		if($var%3==2){echo '<div class="grid-item grid-item--width2">';}
		else{echo '<div class="grid-item grid-item--width3">';}
	}
	?>
		<div class="container">		
			<div class="row">
				<div class="image-user-profile col-md-6">
					<div class="col-sm-4 user-name">
						<?php echo $this->Html->image($image, array(
							"alt" 		=> 	$username,
							"width"		=>	80,
							"height"	=>	80,
							"border-radius" => "50%",
							"class"		=> 	"responsive-img center"
						)); ?>
					</div>
					<div class="col-sm-6">
						<?php echo  $user 	     ?>
					</div>
				</div>
				<div class="profile-langague-stacs col-md-6">						
					<!-- languaje -->	
					<div class="col-sm-12 center">
						  <p><?php echo  $language; 	 ?>&nbsp;</p>
					</div>
					<!-- likes -->
					<div class="col-sm-12 center">
						<?php echo $this->Html->link($likes . ' likes', array("controller" => "snippets", "action" => "hi")); ?>
					</div>
					<!-- dislikes -->
					<div class="col-sm-12 center">
						<?php echo $this->Html->link($dislikes . ' dislikes', array("controller" => "snippets", "action" => "hi")); ?>
					</div>
					<!-- coments -->
					<div class="col-sm-12 center">
						<?php echo $this->Html->link($dislikes . ' comments', array("controller" => "snippets", "action" => "hi")); ?>
					</div>
				</div>
				<!-- Snippet description -->
				<div class="col-md-12 description">
					<?php echo  $description; ?>&nbsp;
				</div>		
				<!-- Snippet content -->
				<div class="col-md-12 snippet_code">
					<pre class='<?php echo $syntax; ?>'><?php echo $content; ?>&nbsp;</pre>
				</div>
				<!-- Snippet comments -->
				<div class="col-md-12">
					<button class="btn" data-toggle="collapse" data-target="#snippet_<?php echo $id; ?>">Show the comments</button>
					<div class="collapse" id='snippet_<?php echo $id; ?>'>
						<?php foreach ($comments as $comment):
							echo $this->Html->link($comment['id'], array("controller" => "users", "action" => "view"));
							var_dump($comment); endforeach; 
						?>
					</div>
					</br>
				</div>
			</div>							
		</div>
	</div>		
	<?php endforeach; ?>		
</div>	

