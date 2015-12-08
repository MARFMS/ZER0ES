<div class="add-snippet" style="right:-350px;">
  <div class="toggle-snippet">NEW</div>
  <div class="add-info-snippet">
	<h3>Snippet</h3>
	<div>
		<?php echo $this->element('addnewsnippet'); ?>
	</div>
  </div>       
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".add-snippet .toggle-snippet").click(function(){
	var a=$(this).parent();
	a.hasClass("ocult")?a.animate({right:"0"},500):a.animate({right:"-350px"},500),a.toggleClass("ocult")})
	});    
</script>