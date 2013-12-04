
<div id="site_content">
<div id="sidebar_container">
<div class="sidebar">
<h3>Latest News</h3>
<?php     $la=latest(); $latest=mysql_fetch_array($la);           ?>
<h4><?php echo $latest['event_type']; ?></h4>

<p><?php echo $latest['event_heading'];  ?>.<br />
<a href="event.php">Read more</a></p>
</div>
<div class="sidebar">
<h3>Useful links  </h3>
<ul class="upc">
<!--	<li><a href="">Packages</a></li>-->
	<li><a href="event.php">Events</a></li>
<!--	<li><a href="#">Patient Education</a></li>-->
	<li><a href="twit_box.php">twit's Blog</a></li>
<!--	<li><a href="#">Last One</a></li>-->
</ul>
<div class="cls"></div>
</div>
</div>
<div style="clear:left"></div>