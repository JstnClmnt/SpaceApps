<?php
	function dd_lang() {
		echo "<font>Choose your language: </font>";
		echo "	<select id='language-select'>";
		$languages = array("Chinese - Simplified", "Chinese - Traditional", "English", "Spanish", "Latin");
		foreach ($languages as $value){
			if ($value == "Latin")
				echo "<option id=\"$value\" value=\"$value\" name=\"$value\" selected>$value</option>";
			else
				echo "<option id=\"$value\" value=\"$value\" name=\"$value\">$value</option>";
		}
		echo "</select>";
	}
?>