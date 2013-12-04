<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<h2>FeedBack Form</h2>
<h3><font color="red"><?php $msg=$_REQUEST['msg']; if (!empty($msg)) { echo $msg; }  ?></font></h3>
<form action="feedback_form.php" method="post">
<div class="form_settings">
<p><span>Name</span><input type="text" name="name" value="" /></p>
<p><span>Email</span><input type="text" name="email" value="" /></p>
<p><span>Phone</span><input type="text" name="phone" value="" /></p>
<p><span>Give feedback</span><textarea rows="8" cols="50"
	name="feedback"></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit"
	type="submit" name="fback" value="button" /></p>
</div>
</form>
</div>
</div>
<?php require 'html_includes/footer.php'; ?>