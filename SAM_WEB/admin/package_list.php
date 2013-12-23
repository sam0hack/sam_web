<?php
require_once 'include_handler.php';

require 'condb.php';
require 'functions/varfilter.php';
$page=unhack($_REQUEST['page']);
if ($page=='active')
{
	$get=mysql_query("select * from packages where package_is_active=1 ")or die(mysql_error());
	while ($dta=mysql_fetch_array($get))
	{
		?>
<form method="post"><input type="hidden" name="id"
	value="<?php echo $dta['package_id'];  ?>">
<p>Package name <input value="<?php echo $dta['package_name']; ?>"
	type="text" name="pn"></p>
Package details<textarea name="pd" rows="" cols=""><?php echo $dta['package_details']; ?></textarea>
Package is active <input type="checkbox" checked="checked" name="chk"> <input
	type="submit" name="update" value="Update Package"> <input
	type="submit" name="del" value="Delete Package"></form>

		<?php
	}


}
if ($page=='inactive')
{
	$get=mysql_query("select * from packages where package_is_active=0 ")or die(mysql_error());
	while ($dta=mysql_fetch_array($get))
	{
		?>
<form method="post"><input type="hidden" name="id"
	value="<?php echo $dta['package_id'];  ?>">
<p>Package name <input value="<?php echo $dta['package_name']; ?>"
	type="text" name="pn"></p>
Package details<textarea name="pd" rows="" cols=""><?php echo $dta['package_details']; ?></textarea>
Package is active <input type="checkbox" name="chk"> <input
	type="submit" name="update1" value="Update Package"> <input
	type="submit" name="del" value="Delete Package"></form>

		<?php
	}
}
if (isset($_POST['update1']))
{
	$id=unhack($_POST['id']);
	$pn=unhack($_POST['pn']);
	$pd=unhack($_POST['pd']);
	$chk=unhack($_POST['chk']);
	if (!empty($chk))
	{
		mysql_query("update packages set package_name='$pn', package_details='$pd' ,package_is_active=1 where package_id='$id' ")or die(mysql_error());
	}
	else
	{
		mysql_query("update packages set package_name='$pn', package_details='$pd' ,package_is_active=0 where package_id='$id' ")or die(mysql_error());

	}
}

if (isset($_POST['update']))
{
	$id=unhack($_POST['id']);
	$pn=unhack($_POST['pn']);
	$pd=unhack($_POST['pd']);
	$chk=unhack($_POST['chk']);
	if (!empty($chk))
	{
		mysql_query("update packages set package_name='$pn', package_details='$pd' ,package_is_active=1 where package_id='$id' ")or die(mysql_error());
	}
	else
	{
		mysql_query("update packages set package_name='$pn', package_details='$pd' ,package_is_active=0 where package_id='$id' ")or die(mysql_error());

	}
}
if (isset($_POST['del']))
{
	$id=unhack($_POST['id']);
	mysql_query("delete from packages where package_id='$id'");
}
?>
