<footer>
<div id="inner-footer">
<h2>Tours of the Month!</h2>
<?php dynamic_sidebar('sidebar-footer');?>




</div>

</footer>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
</body>
</html>