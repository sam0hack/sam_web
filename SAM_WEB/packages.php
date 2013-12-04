<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
$packages=packages();
while ($package=mysql_fetch_array($packages))
{
	?>
<div class="content">

<div class="form_settings">
<p><span>Package name</span><input type="text" name="subject"
	value="<?php echo $package['package_name']; ?>" readonly /></p>
<p><span>Packages details</span><textarea id="" name="que" cols="50"
	rows="5" style="padding: 3px; width: 550px" readonly><?php echo $package['package_details']; ?></textarea></p>
</div>
<hr>
	<?php }?></div></div>

	<?php require 'html_includes/footer.php'; ?>