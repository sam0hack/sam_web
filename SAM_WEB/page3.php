<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
$page=  page('page3');
$h= $page['page_heading'];
$i= $page['img'];
$c= $page['page_containt'];
?>
<center><h2><?php echo $h; ?></h2></center>
<img style=" alignment-adjust:  middle" src="admin/<?php echo $i; ?>" height="500" width="800">
<hr>
<p style="text-align:  justify"><?php echo $c; ?></p>
</div>
    <?php require 'html_includes/footer.php'; ?>
