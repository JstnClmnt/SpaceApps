<?php
	include("global_var.php");
	include("header.php");
	include("navbar.php");
	include("banner.php");
	include("about.php");
	include("contact.php");
	include("footer.php");
	include("contact-info.php");
	include("contact-form.php");
	include("drop_down-language.php");
?>
<!DOCTYPE html>
<head>
	<?php
		initialize_header();
		initialize_nav();
		initialize_banner();
	?>
	
	<div class="container-mid">
		<?php
			initialize_about();
		?>
	</div>

	<div class="container-mid">
		<?php
			initialize_frm_contact();
		?>
	</div>
	
	<?php
		initialize_footer();
	?>
</html>