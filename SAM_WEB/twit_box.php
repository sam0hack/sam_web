<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
echo '<br>';
echo '<center>';
$sql=  mysql_query("select twit from sns");
$f=  mysql_fetch_array($sql);
$ff=$f['twit'];
$d=  base64_decode($ff);
echo $d;
echo '</center>';

?>
</div>
    <?php require 'html_includes/footer.php'; ?>
