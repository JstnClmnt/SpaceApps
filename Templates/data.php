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
		echo $OUTPUT;
		initialize_header();
		initialize_navm();
	?>

	<section class='section'>
		<div class='mid-container'>
			<div class='section-title'>
				<font>Scatter Plot</font>
			</div>
			<center>
				<div class='dataTarget' id='dataT' style='width: 90vw; height:400px; overflow-x: auto; overflow-y:auto; border: 1px solid black;'>
					
				</div>
			</center>
		</div>
	</section>

<hr>

	<script src='js/sort_table.js'></script>
	<div class="mid-container">
		<section id="table" class="section">
			<div class='section-title'>
				<font>Table Layout</font>
			</div>
			<center>
				<!--<script src="sort_table.js"></script>-->
				<table class="table" id="my-table" style='display:block; overflow-x: auto; overflow-y: auto; min-height:400px; max-height:400px;'>
					<thead>
						<tr>
							<?php
								$numColC = count($datacols);
								for ($x = 0; $x < $numColC; $x++) {

									$checker = explode('_',  $datacols[$x]);

									if (count($checker) > 1) {
										echo "<th scope='col' valign='middle' class='primary_id' onclick='sortTable()'>" . $checker[1] ."<br><font style='font-size:10px;'>" . $checker[0] . "</font></th>";


									}
									else {
										echo "<th scope='col' valign='middle' class='primary_id' onclick='sortTable()'>" . $datacols[$x] . "</th>";
									}
								}
							?>
						</tr>
					</thead>
					<tbody>
						<!--<?php
							$numCol = 20;
							/**for ($g=0; $g < $numCol; $g++){
								$newstring1 = explode(", ", $sample_data[$g][0]);
								foreach ($sample_data[$g] as $value) {}
								echo "<tr>";
								echo "<th scope='row' id='primary_id$g' class='primary_id'>" . $x = $g + 1 . "</th>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";

								echo "</tr>";
							}**/
						?>-->
				    </tbody>
				</table>
			</center>
		</section>
	</div>
	
	<?php
		initialize_footer();
	?>
</html>