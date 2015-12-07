<div class="add-snippet" style="right:-280px;">
  <div class="toggle-snippet">NEW</div>
  <div class="add-info-snippet">
	<h3>Theme Switcher</h3>
	<p></p>
  </div>       
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".add-snippet .toggle-snippet").click(function(){
	var a=$(this).parent();
	a.hasClass("ocult")?a.animate({right:"0"},500):a.animate({right:"-280px"},500),a.toggleClass("ocult")})
	});    
</script>