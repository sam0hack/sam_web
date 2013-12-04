<?php
require 'gears/db.creator.class.php';
if (isset($_POST['sub']))
{

	$host=$_POST['host'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$db=$_POST['db'];

	$creator=new creator();
	$creator->db_config_creator($host, $user, $pass, $db);

	$config=new creator();
	$config->db_creator($host, $user, $pass, $db);



}
?>
<script
	src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link
	href="SpryAssets/SpryValidationTextField.css" rel="stylesheet"
	type="text/css">
<body bgcolor="#F0F0F0" background="img/Blur.png" text="#FFFFFF"
	link="#00FF00" vlink="#99FFFF" alink="#00CC00">
<center>
<h1>WebDoc 2.0 Installer</h1>
</center>
<h2>Database Configuration</h2>


<form method="post">
<center>
<table width="674" height="231" border="0" align="center"
	cellpadding="5">
	<tr>
		<th width="94" height="59" scope="row">Host</th>
		<td width="280"><span id="sprytextfield1"> <input type="text"
			name="host"> <span class="textfieldRequiredMsg">A MySql Host name OR
		server name is required.</span><span class="textfieldInvalidFormatMsg">Invalid
		format.</span></span></td>
	</tr>
	<tr>
		<th height="36" scope="row">Username</th>
		<td><span id="sprytextfield2"> <input type="text" name="user"> <span
			class="textfieldRequiredMsg">A Mysql username is required.</span><span
			class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	</tr>
	<tr>
		<th height="35" scope="row">Password</th>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<th height="37" scope="row">Database name</th>
		<td><span id="sprytextfield3"> <input name="db" type="text"> <span
			class="textfieldRequiredMsg">A Database name is required.</span><span
			class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	</tr>
	<tr>
		<th height="52" colspan="2" scope="row"><input type="submit"
			style="color: #03C; border: #00F; font-size: 16px; alignment-adjust: central; background: skyblue; size: 10px;"
			value="Next step" name="sub"></th>
	</tr>
</table>

</center>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {validateOn:["blur"]});
</script>