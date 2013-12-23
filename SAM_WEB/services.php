<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
$services=services();
while ($service=mysql_fetch_array($services))
{
	?>
<div class="content">
<div class="form_settings">
<p><span>Category</span><input type="text" name="subject"
	value="<?php echo $service['main_topic'];?>" readonly /></p>
<p><span>Topic</span><input type="text" name="subject"
	value="<?php echo $service['service_topic']; ?>" readonly /></p>
<p><span>Details</span><textarea id="" name="que" cols="50" rows="5"
	style="padding: 3px; width: 550px" readonly><?php echo $service['service_details']; ?></textarea></p>
</div>
<hr>
	<?php }?></div></div>

	<?php require 'html_includes/footer.php'; ?>