<?php 
// Start a session for displaying any form errors
session_start(); 
?>
<!DOCTYPE html>

<html>

<script>
	
	function changeVisibility(){
		document.getElementById("co").style.display="none";
		document.getElementById("st").style.display="none";
		document.getElementById("sw").style.display="none";
		document.getElementById("ch").style.display="none";

		var selected = document.getElementById("objectType");
		var selectedValue = selected.options[selected.selectedIndex].value;

		switch(selectedValue){
			case "0":	break;
			case "1":	document.getElementById("co").style.display="block";
				break;
			case "2":	document.getElementById("st").style.display="block";
				break;
			case "3":	document.getElementById("sw").style.display="block";
				break;
			case "4":	document.getElementById("ch").style.display="block";
				break;
			default:
				break;
		}
	}

</script>

	<head>
		<title>Buffalo Artifacts Database Submission</title>

		<style type="text/css">
			label
			{
				float: left;
				text-align: right;
				margin-right: 10px;
				width: 100px;
				color: black;
			}

			#submit
			{
				float: left;
				margin-top: 5px;
				position: relative;
				left: 110px;
			}

			#error
			{
				color: red;
				font-weight: bold;
				font-size: 16pt;
			}
		</style>
	</head>

	<body>
	
		<div>
				<?php
				if (isset($_SESSION['error']))
				{
					echo "<span id=\"error\"><p>" . $_SESSION['error'] . "</p></span>";
					unset($_SESSION['error']);
				}
				?>
				<h1><center>Submission Website</center></h1>

				<h2>Fill out the information below to the best of your abilities</h2>
				<br>

				<form action="upload.php" method="post" enctype="multipart/form-data">
				<p>Artifact Type</p>
				<p>

					<select id="objectType" name="objectType" onChange="changeVisibility()" >
						<option name="Object_type" value="0">--Select a type--</option>
						<option name="Object_type" value="1">Coin</option>
						<option name="Object_type" value="2">Statue</option>
						<option name="Object_type" value="3">Sword</option>
						<option name="Object_type" value="4">Chariot</option>
					</select>
					<p id="co" style="display:none">Display Coin Specific Info</p>
					<p id="st" style="display:none">Display Statue Specific Info</p>
					<p id="sw" style="display:none">Display Sword Specific Info</p>
					<p id="ch" style="display:none">Display Chariot Specific Infot</p>
					<fieldset>
						<legend><b>Cultural</b></legend>
						<table>

							<tr>
								<td>Cultural Group</td>
								<td><input type="text" name="group"></td>
							</tr>
							<tr>
								<td>Relative Chronological Date</td>
								<td><input type="text" name="relative_date"></td>
							</tr>
							<tr>
								<td>Absolute Date</td>
								<td><input type="text" name="exact_date"><br></td>
							</tr>

						</table>
					</fieldset>

					<fieldset>
						<legend><b>Inventory</b></legend>
						<table>

						<tr>
							<td>Inventory Number</td>
							<td><input type="number" name="inventory_number"></td>
						</tr>
						<tr>
							<td>Provisional / Running Number</td>
							<td><input type="number" name="provisional_number"></td>
						</tr>

						</table>
					</fieldset>

					<fieldset>
						<legend><b>Measurements</b></legend>
						<table>

							<tr>
								<td>Length</td>
								<td><input type="text" name="length"></td>
							</tr>
							<tr>
								<td>Width</td>
								<td><input type="text" name="width"></td>
							</tr>
							<tr>
								<td>Depth</td>
								<td><input type="text" name="depth"></td>
							</tr>
							<tr>
								<td>Diameter</td>
								<td><input type="text" name="diameter"></td>
							</tr>
							<tr>
								<td>Weight</td>
								<td><input type="text" name="weight"></td>
							</tr>

						</table>
					</fieldset>

					<fieldset>
					<legend><b>Description</b></legend>


					Describe the object<br><textarea name="description" cols="100" rows="8"></textarea><br>
					Notes<br><textarea name="notes" cols="100" rows="2"></textarea>

<!--
					<input type="text" name="description">
					<input type="text" name="notes">
-->					
					</fieldset>

					<fieldset>
						<legend><b>Source Info</b></legend>
						<table>

							<tr>
								<td>References</td>
								<td><input type="text" name="references"></td>
							</tr>
							<tr>
								<td>Donor / Source</td>
								<td><input type="text" name="donor"></td>
							</tr>
							<tr>
								<td>Information</td>
								<td><input type="text" name="information"></td>
							</tr>
							<tr>
								<td>Documentation Present</td>
								<td><input type="text" name="documentation"></td>
							</tr>
							<tr>
								<td>Conservation Notes</td>
								<td><input type="text" name="conservation"></td>
							</tr>
							<tr>
								<td>Bibliography</td>
								<td><input type="text" name="bibliography"></td>
							</tr>

						</table>
					</fieldset>

					<label>Upload Image</label>
					<input type="file" name="image" /><br />
					<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
					<input type="submit" id="submit" value="Upload" />
				</p>
				</form>
		</div>
	</body>
</html>
