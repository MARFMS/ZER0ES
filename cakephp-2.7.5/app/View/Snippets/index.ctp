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
					$dislikes 	 =	h($snippet['Snippet']['dislikes']);
					$language    =  h($snippet['Snippet']['language']);
					$description =  h($snippet['Snippet']['description']);
					$content     =  h($snippet['Snippet']['content']);
					$username	 = 	bracketize($snippet['User']['username']);
					$syntax 	 = 	which_language($snippet['Snippet']['language']);
 					$image 		 = 	"user_imgs/" . $snippet['User']['image'];
				?>
				<!--<p><?php echo  $id 	         ?>&nbsp;</p>-->
                        <div class="container">
                              <!-- User image -->
                              <div class="row">
      					<div class="col s12 center">
      						<?php echo $this->Html->image($image, array(
      							"alt" 		=> 	$username,
      							"width"		=>	60,
      							"height"	      =>	60,
      							"class"		=> "circle responsive-img center"
      						)); ?>
      					</div>
      				</div>
                              <!-- User name -->
      				<div class="row">
      					<div class="col s12 center username" style="margin-top:-20px;">
      						<?php echo  $user 	     ?>
      					</div>
      				</div>
                              <!-- Snippet description -->
                              <div class="row">
                                    <div class="col s10 description">
                                          <?php echo  $description; ?>&nbsp;
                                    </div>
                                    <div class="col s2 right-align">
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
                                          <div class="col s2 center">
                                                <i class="material-icons">thumb_up</i><br/>
                                                <?php echo  $likes;    	 ?>&nbsp;
                                          </div>
                                          <div class="col s2 center">
                                                <i class="material-icons">thumb_down</i><br/>
                                                <?php echo  $dislikes; 	 ?>&nbsp;
                                          </div>
                                          <div class="col s2 center">
                                                <i class="material-icons">mode_comments</i><br/>
                                                <?php echo  0 	 ?>&nbsp;
                                          </div>
                                    </div>
                              </div>
                        </div>

			</div>
		</div>
	<?php endforeach; ?>
</div>
