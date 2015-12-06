<nav id=menu_wrapper_visible class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">		
	  </button>
	  <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages','action'=>'display'));?>"> ZER0ES </a>	 
	</div>
	<div id="navbar" class="navbar-collapse collapse">		
	  <ul class="nav navbar-nav navbar-right"> 	
			<li><a href="#">Profile</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'logout'));?>">Logout</a></li>
      </ul>
	  <form class="navbar-form navbar-right">
			<input type="text" class="form-control" placeholder="Search snippet...">
	  </form>
	</div>
  </div>
</nav> 