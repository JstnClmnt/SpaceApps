<?php

	include("global_var.php");
	include("header.php");
	include("navbar_mod.php");
	include("footer.php");
	include("dataReader.php");

?>

<!DOCTYPE html>
<head>
	<?php
		$target_dir = "";
		$target_file = $target_dir . basename("data.csv");
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file);
		$OUTPUT=shell_exec("py ../predict.py");
		initialize_header();
		initialize_navm();
	?>
	<div class="mid-container">
		<section id="table" class="section">
			<div class='section-title'>
				<font>Find our next home!</font>
				<hr class='small'>
			</div>
			<center>
				<!--<script src="sort_table.js"></script>-->
				<table class="table" id="my-table" style='display:block; overflow-x: auto; overflow-y: auto; min-height:400px; max-height:400px;'>
					<?php readCSV('results.csv'); ?>
				</table>
			</center>
		</section>
	</div>
	
	<?php
		initialize_footer();
	?>
	<?php
		function readCSV($filename, $header=true) {
			$handle = fopen($filename, "r");
		//display header row if true
		if ($header) {
			$csvcontents = fgetcsv($handle);
			echo "<thead><tr style='background-color:#333'>";
			foreach ($csvcontents as $headercolumn) {
				echo "<th style='color:white;'>$headercolumn</th>";
			}
			echo '</tr></thead>';
		}
		// displaying contents
		while ($csvcontents = fgetcsv($handle)) {
			echo '<tr>';
			$x=0;
			foreach ($csvcontents as $column) {
				if ($x==17){
					echo "<td style='border-left:2px solid #333'>$column</td>";
					$x+=1;
				}
				else{
					 echo "<td>$column</td>";
					$x += 1;
				}
			}
			echo '</tr>';
		}
		fclose($handle);
		}
	?>
</html>