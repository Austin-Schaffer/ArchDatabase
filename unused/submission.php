<!DOCTYPE html>
<html>
<body>
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
<h1><center>Submission Website</center></h1>

<h2>Fill out the information below to the best of your abilities</h2>
<br>
<p>Artifact Type</p>
<form name="input" action="upload.php" method="post" enctype="multipart/form-data">
<select id="objectType" onChange="changeVisibility()" >
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
		<td><input type="text" id="group_name"></td>
	</tr>
	<tr>
		<td>Relative Chronological Date</td>
		<td><input type="text" id="period"></td>
	</tr>
	<tr>
		<td>Absolute Date</td>
		<td><input type="text" id="exact_date"><br></td>
	</tr>

</table>

</fieldset>


<fieldset>
<legend><b>Inventory</b></legend>

<table>

	<tr>
		<td>Inventory Number</td>
		<td><input type="text" id="inventory_number"></td>
	</tr>

	<tr>
		<td>Provisional / Running Number</td>
		<td><input type="text" id="provisional_number"></td>
	</tr>

</table>
</fieldset>

<fieldset>
<legend><b>Measurements</b></legend>

<table>

	<tr>
		<td>Length</td>
		<td><input type="text" id="length"></td>
	</tr>

	<tr>
		<td>Width</td>
		<td><input type="text" id="width"></td>
	</tr>

	<tr>
		<td>Depth</td>
		<td><input type="text" id="depth"></td>
	</tr>

	<tr>
		<td>Diameter</td>
		<td><input type="text" id="diameter"></td>
	</tr>

	<tr>
		<td>Weight</td>
		<td><input type="text" id="weight"></td>
	</tr>

</table>
</fieldset>

<fieldset>
<legend><b>Description</b></legend>

Describe the object<br><textarea id="description" cols="100" rows="8"></textarea><br>
Notes<br><textarea id="description" cols="100" rows="2"></textarea>
</fieldset>

<fieldset>
<legend><b>Source Info</b></legend>

<table>

	<tr>
		<td>References</td>
		<td><input type="text" id="references"></td>
	</tr>

	<tr>
		<td>Donor / Source</td>
		<td><input type="text" id="donor"></td>
	</tr>

	<tr>
		<td>Information</td>
		<td><input type="text" id="information"></td>
	</tr>

	<tr>
		<td>Documentation Present</td>
		<td><input type="text" id="documentation"></td>
	</tr>

	<tr>
		<td>Conservation Notes</td>
		<td><input type="text" id="conservation notes"></td>
	</tr>

	<tr>
		<td>Bibliography</td>
		<td><input type="text" id="bibliography"></td>
	</tr>

</table>
</fieldset>

<input type="file" name="myFile"/>

<input type="submit" value="Submit">
</form>

</body>
</html>
