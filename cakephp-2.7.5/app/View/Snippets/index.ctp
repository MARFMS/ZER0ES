<?php require_once("snippets.php") ?>
<?php $this->assign('title', 'Index'); ?>
<div>	
	<?php foreach ($snippets as $snippet): ?>
		<div class="snippet_entry" id="entry_border">
		<div class="snippet_content" id="content_border">
			<?php
					// Retrieve all the values
				$id   		 = 	h($snippet['Snippet']['id']);	// Not necessary
				$user 		 = 	$this->Html->link(bracketize($snippet['User']['username']), array('controller' => 'users', 'action' => 'view', $snippet['User']['id']));
				$likes 		 = 	h($snippet['Snippet']['likes']);
				$dislikes 	       =	h($snippet['Snippet']['dislikes']);
				$language          =    h($snippet['Snippet']['language']);
				$description       =    h($snippet['Snippet']['description']);
				$content           =    h($snippet['Snippet']['content']);
				$username	       = 	bracketize($snippet['User']['username']);
				$syntax 	       = 	which_language($snippet['Snippet']['language']);
				$image 		 = 	"user_imgs/" . $snippet['User']['image'];
				$comments    =    $snippet['Comment'];
			?>
			<!--<p><?php echo  $id 	         ?>&nbsp;</p>-->
					<div class="container">
						  <!-- User image -->
						<div class="row">
							<div class="col-sm-1">
								<?php echo $this->Html->image($image, array(
									"alt" 		=> 	$username,
									"width"		=>	40,
									"height"	=>	40,
									"class"		=> 	"responsive-img center"
								)); ?>
							</div>
      					<div class="col-sm-1 username hidden-sm">
      						<?php echo  $user 	     ?>
					</div>

      				</div>
                              <!-- User name -->
                              <!-- Snippet description -->
                              <div class="row">
                                    <div class="col-sm-10 description">
                                          <?php echo  $description; ?>&nbsp;
                                    </div>
                                    <div class="col-sm-2 right-align">
                                          <p><?php echo  $language; 	 ?>&nbsp;</p>
                                    </div>
                              </div>

                              <!-- Snippet content -->
                              <div class="snippet_code">
                                    <pre class='<?php echo $syntax; ?>'><?php echo $content; ?>&nbsp;</pre>
                              </div>

                              <!-- Snippet info -->
                              <div class="snippet_info">
                                    <div class="row">
                                          <div class="col-sm-2 center">
						<?php echo $this->Html->link($likes . ' likes', array("controller" => "snippets", "action" => "hi")); ?>
                                          </div>
                                          <div class="col-sm-2 center">
						<?php echo $this->Html->link($dislikes . ' dislikes', array("controller" => "snippets", "action" => "hi")); ?>
                                          </div>
                                          <div class="col-sm-2 center">
						<?php echo $this->Html->link($dislikes . ' dislikes', array("controller" => "snippets", "action" => "hi")); ?>
                                          </div>
                                    </div>
                              </div>
				<script>
					$('#snippet_<?php echo $id; ?>').collapse("hide");
				</script>
				<div class="container">
					<br/>
					<div class="row">
						<div class="col-sm-12">
							<button class="btn" data-toggle="collapse" data-target="#snippet_<?php echo $id; ?>">Show the comments</button>

							<div class="collapse" id='snippet_<?php echo $id; ?>'>
								<?php foreach ($comments as $comment):
									echo $this->Html->link($comment['id'], array("controller" => "users", "action" => "view"));
									var_dump($comment); endforeach; 
								?>
							</div>
						</div>
					</div>
				</div>
                        </div>

			</div>
		</div>
	<?php endforeach; ?>		
</div>
