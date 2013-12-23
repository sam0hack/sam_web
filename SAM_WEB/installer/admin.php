<?php
require_once  'db_conx.php';
require_once  'gears/db.creator.class.php';

if (isset($_POST['sub']))
{
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$admin= new creator();
	$admin->admin($username, $pass);
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
<h2>Admin Configuration</h2>


<form method="post">
<center>
<table width="452" border="0" align="center" cellpadding="5">
	<tr>
		<th width="68" scope="row">Username</th>
		<td width="290"><span id="sprytextfield1"> <input type="text"
			name="username"> <span class="textfieldRequiredMsg">Username is
		required.</span><span class="textfieldInvalidFormatMsg">Invalid
		format.</span></span></td>
	</tr>
	<tr>
		<th scope="row">Password</th>
		<td><span id="sprytextfield2"> <input type="password" name="pass"> <span
			class="textfieldRequiredMsg">Password is required.</span><span
			class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	</tr>
	<tr>
		<th height="52" colspan="2" scope="row"><input type="submit"
			style="color: #03C; border: #00F; font-size: 16px; alignment-adjust: central; background: skyblue; size: 10px;"
			value="Finish" name="sub"></th>
	</tr>
</table>

</center>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom", {hint:"eg.admin", validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {validateOn:["blur", "change"]});
</script>