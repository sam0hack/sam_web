<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<div class="form_settings">
<h2>Contact Us</h2>
<br>
<p><font color="gold">Clicnic Name:</font> <?php echo $about=contact('hos_name') ; ?></p>
<p><font color="gold">Email: </font><?php echo $about=contact('contact_email') ; ?></p>
<p><font color="gold">Call for appointment: </font><?php echo $about=contact('contact_num') ; ?></p>
<p><font color="gold">Address: </font><?php echo $about=contact('contact_feed_back') ; ?></p>
</div>
</div>
</div>
<?php require 'html_includes/footer.php'; ?>