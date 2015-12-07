<div class="add-snippet" style="right:-280px;">
  <div class="toggle-snippet">NEW</div>
  <div class="add-info-snippet">
	<h3>Snippet</h3>
	<div>
		<?php 
		echo $this->Form->create('Snippet');
		echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
		echo $this->Form->input('description');
		echo $this->Form->input('language');
		echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 10, 'cols' => 100));
		echo $this->Form->end(__('Submit')); ?>
	</div>
  </div>       
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".add-snippet .toggle-snippet").click(function(){
	var a=$(this).parent();
	a.hasClass("ocult")?a.animate({right:"0"},500):a.animate({right:"-280px"},500),a.toggleClass("ocult")})
	});    
</script>