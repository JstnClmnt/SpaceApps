<?php 
	function initialize_field_contact(){
		echo "			<form method='' action='' style='width:auto;'>";
		echo "				<div class='div-label'><label for='pname'>Name</label></div><input id='pname' type='text' placeholder='Name' required>";
		echo "				<div class='div-label'><label for='pemail'>E-mail</label></div><input id='pemail' type='text' placeholder='E-mail' required>";
		echo "				<div class='div-label'><label for='pnum'>Cellphone number</label></div><input id='pnum' type='number' placeholder='Cellphone number'>";
		echo "				<div class='div-label'><label for='pmessage'>Your message</label></div>";
		echo "				<textarea id='pmessage' required></textarea>";
		echo "				<div class='div-label'>";
		echo "					<label>Insert file(s)</label>";
		echo "				</div>";
		echo "				<div class='file-container'>";
		echo "					<input id='file' type='file'>";
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