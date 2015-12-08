<?php require_once("snippets.php") ?>
<?php $this->assign('title', 'Index'); ?>
<div>
      <?php foreach ($snippets as $snippet): ?>
            <div class="snippet_entry" id="entry_border">
			<div class="snippet_content" id="content_border">
				<?php
					// Retrieve all the values
					$id   		 = 	h($snippet['Snippet']['id']);	// Not necessary
					$user 		 = 	$this->Html->link(bracketize($snippet['User']['username']), array('controller' => 
'users', 'action' => 'view', $snippet['User']['id']));
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
      					<div class="col-sm-1 img-circle">
      						<?php echo $this->Html->image($image, array(
      							"alt" 		=> 	$username,
      							"width"		=>	40,
      							"height"	=>	40,
      							"class"		=> 	"responsive-img center"
      						)); ?>
      					</div>
      					<div class="col-sm-1 username hidden-sm hidden-xs">
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
                                          <div class="col-sm-2 snippet_info_entry">
						<?php echo $this->Html->link($likes . ' likes', array("controller" => "snippets", "action" => "hi")); ?>
                                          </div>
                                          <div class="col-sm-2 snippet_info_entry">
						<?php echo $this->Html->link($dislikes . ' dislikes', array("controller" => "snippets", "action" => "hi")); ?>
                                          </div>
                                          <div class="col-sm-2 snippet_info_entry">
						<?php echo count($comments) . ' comments'; ?>
                                          </div>
					  <div class="col-sm-4">
					  <?php if(!empty($comments)): ?>
					  <button class="btn btn_comments" data-toggle="collapse" data-target="#snippet_<?php echo $id; ?>">Show the 
comments</button>
					  <?php endif; ?>
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
							<div class="collapse" id='snippet_<?php echo $id; ?>'>
								<div class="container">
								<?php if(!empty($comments)): ?>
									<div class="row">
									<?php foreach ($comments as $comment): ?>
										<div class="card-block">
										<h4 class="card-title comment_user">
										<?php echo bracketize($this->Html->link($comment['User']['username'],
												array("controller" => "user", "action" => "view"))); ?>										

										</h4>
										<p class="card-text comment_content">
										<?php echo $comment['comment']; ?>
										</p>
										</div>
									<?php endforeach; ?>
									</div>
									<div class="row">
										<?php 
											echo $this->Form->create('Comment', array('url' => array('controller' => 'comments', 'action' => 'add')));
											echo $this->Form->hidden('snippet_id', array('value' => $id));
											echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
											echo $this->Form->input('comment', array("label" => ""));
											echo $this->Form->end(__('Post'), array("class" => "btn"));
										?>
									</div>
								<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
                        </div>

			</div>
		</div>
	<?php endforeach; ?>
</div>
