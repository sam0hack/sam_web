<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
require_once 'admin/functions/varfilter.php';
$x=  unhack($_REQUEST['x']);
$ex= expq('*',$x);
$r=  mysql_fetch_array($ex);

?>
<div class="content">
    <h2><a href="explore.php">Explore</a><font style=" font-family:  sans-serif; color: silver; ">-></font><?php echo $r['topic']; ?></h2>
<font style=" alignment-adjust: auto; color: #70D4E6;" >
<?php
echo $r['contain'];
?>
    </font>
    



</div>
</div>
	<?php require 'html_includes/footer.php'; ?>