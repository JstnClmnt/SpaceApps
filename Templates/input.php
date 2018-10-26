<?php
	
	include("global_var.php");
	include("header.php");
	include("navbar_mod.php");
	include("contact.php");
	include("footer.php");
	include("dataReader.php")

?>
<!DOCTYPE html>
<html>
<head>
	<?php
		initialize_header();
		initialize_navm();
	?>
	<section class='section'>
		<div class='mid-container'>
			<div class='section-title'>
				<font>Data Input</font><hr class='small'>
			</div>
			<?php userInp(); ?>
		</div>
	</section>
		<?php initialize_footer(); ?>
</head>
</html>