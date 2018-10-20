<?php

	function userInp(){
		echo "			<form method='POST' action='data.php' enctype='multipart/form-data' style='width:auto;'>";
		echo "				<div class='div-label'><label for='pname'>Name</label></div><input id='pname' type='text' placeholder='Name' required>";
		echo "				<div class='div-label'><label for='pemail'>E-mail</label></div><input id='pemail' type='text' placeholder='E-mail' required>";
		echo "				<div class='div-label'>";
		echo "					<label>Insert file(s)</label>";
		echo "				</div>";
		echo "				<div class='file-container'>";
		echo "					<input id='filename' name='filename' type='file' required>";
		echo "				</div>";
		echo "				<div class='row form-btn-container'>";
		echo "					<div class='col-sm-6'>";
		echo "						<center>";
		echo "							<input type='submit' class='btn btn-form' value='SUBMIT'>";
		echo "						</center>";
		echo "					</div>";
		echo "					<div class='col-sm-6'>";
		echo "						<center>";
		echo "							<button class='btn btn-form'>CLEAR ALL</button>";
		echo "						</center>";
		echo "					</div>";
		echo "				</div>";
		echo "			</form>";
	}


?>