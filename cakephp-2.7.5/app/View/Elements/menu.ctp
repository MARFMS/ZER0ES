<nav id=menu_wrapper_visible class="navbar navbar-default navbar-fixed-top am-top-header">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">		
			</button>
			<a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages','action'=>'display'));?>"> ZER0ES </a>	
			<?php echo $this->Form->create('User', array('url' => array('controller' => 'snippets', 'action' => 'add'),'class'=>'navbar-form navbar-right'));					
				echo $this->Form->input(' ', array('class' => 'form-control','placeholder' => 'Search snippet...'));
				$options = array(
					'label' => 'search',
					'div' => array(
						'class' => 'btn'
					)
				);
			echo $this->Form->end($options); ?>			
		</div>			
		<?php if($this->Session->read('User.user')){?>
		<?php $photo = $this->Session->read('User.photo');?>				
		<div id="navbar" class="navbar-collapse collapse">		
			<ul class="nav navbar-nav navbar-right mn_img"> 
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="<?php echo  $this->webroot.'img/user_imgs/'.$photo; ?>"> <span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'profile'));?>">Profile</a></li>                
						<li role="separator" class="divider"></li>                
						<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'logout'));?>">Logout</a></li>                
					</ul>
				</li>            
			</ul>	
		</div>
		<?php }else{ ?>
		<div id="navbar" class="navbar-collapse collapse">		
			<ul class="nav navbar-nav navbar-right"> 				
				<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'login'));?>">Login</a></li>
				<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'add'));?>">Sign Up</a></li>
			</ul>
		</div>
	  <?php }?>	  
	</div>
</nav> 
