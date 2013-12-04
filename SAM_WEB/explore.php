<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<h2>Explore</h2>

<?php
$e=  explore('*');
while($explore = mysql_fetch_array($e)) 
{

?>
<br>
    <ul>
    <li>
        <a href="exp.php?x=<?php echo $explore['id']; ?>"><?php echo $explore['topic']; ?></a>
    </li>
    </ul>
    
    
	<?php } ?>


</div>
</div>
	<?php require 'html_includes/footer.php'; ?>