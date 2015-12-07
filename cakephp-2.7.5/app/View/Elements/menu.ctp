<nav id=menu_wrapper_visible class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">		
	  </button>
	  <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages','action'=>'display'));?>"> ZER0ES </a>	 
	</div>
	
	<?php if($this->Session->read('User.user')){?>
		<div id="navbar" class="navbar-collapse collapse">		
		<ul class="nav navbar-nav navbar-right"> 	
			<li><a href="#">Profile</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'logout'));?>">Logout</a></li>
		</ul>	
		<?php 
		$photo = $this->Session->read('User.photo');		
		echo  $this->webroot.'img/user_imgs/'.$photo; ?>
	  <?php }else{ ?>
		<div id="navbar" class="navbar-collapse collapse">		
		<ul class="nav navbar-nav navbar-right"> 			
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'login'));?>">Login</a></li>
			<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'add'));?>">Sing Up</a></li>
		</ul>
	  <?php }?>
	  <form class="navbar-form navbar-right">
			<input type="text" class="form-control" placeholder="Search snippet...">
	  </form>
	</div>
  </div>  
</nav> 
