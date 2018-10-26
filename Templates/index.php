<?php
	include("global_var.php");
	include("header.php");
	include("navbar.php");
	include("banner.php");
	include("about.php");
	include("footer.php");
	include("drop_down-language.php");
?>
<!DOCTYPE html>
<head>
	<?php
		initialize_header();
		initialize_nav();
		initialize_banner();
	?>
	
	<div class="container-mid" style='background-color: #b0c4de;'>
		<?php
			initialize_about();
		?>
	</div>

	<div class="container-mid invert">
		<?php
			initialize_about2();
		?>
	</div>

	<div class='container-mid' style='background-color: #b0c4de;'>
		<?php
			otherproj();
		?>
	</div>

	<?php
		initialize_footer();
	?>
</html>