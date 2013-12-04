<?php
require_once 'include_handler.php';

require 'condb.php';


?>
<style type="text/css">
.sss {
	color: #FF0;
}

a:link {
	color: #90F;
	text-decoration: none;
}

a:visited {
	text-decoration: none;
	color: #906;
}

a:hover {
	text-decoration: none;
}

a:active {
	text-decoration: none;
	color: #93F;
}
</style>

<center>
<h3>Admin Dashboard</h3>
</center>
<style type="text/css">
.tg-left {
	text-align: left;
}

.tg-right {
	text-align: right;
}

.tg-center {
	text-align: center;
}

.tg-bf {
	font-weight: bold;
}

.tg-it {
	font-style: italic;
}

.tg-table-plain {
	border-collapse: collapse;
	border-spacing: 0;
	font-size: 100%;
	font: inherit;
}

.tg-table-plain td {
	border: 1px #555 solid;
	padding: 10px;
	vertical-align: top;
}
</style>
<table class="tg-table-plain">
	<tr>
		<th class="tg-center"></th>
		<th class="tg-center"></th>
		<th class="tg-center"></th>
		<th class="tg-center"></th>
		<th></th>
	</tr>
	<tr class="tg-even">
		<td class="tg-center">Questions</td>
		<td class="tg-center">Answers</td>
		<td class="tg-center">FeedBacks</td>
		<td class="tg-center">Events</td>
		<td class="tg-center">Article's</td>
	</tr>
	<tr>
		<td><?php $cq=mysql_query("select COUNT(question) from ask_me"); $q=mysql_fetch_array($cq); echo $q[0]; ?></td>
		<td><?php $cq=mysql_query("select COUNT(answer) from answers"); $q=mysql_fetch_array($cq); echo $q[0]; ?></td>
		<td><?php $cq=mysql_query("select COUNT(feedback_id) from feedback"); $q=mysql_fetch_array($cq); echo $q[0]; ?></td>
		<td><?php $cq=mysql_query("select COUNT(event_id) from events"); $q=mysql_fetch_array($cq); echo $q[0]; ?></td>
		<td><?php $cq=mysql_query("select COUNT(article_id) from articles"); $q=mysql_fetch_array($cq); echo $q[0]; ?></td>
	</tr>

</table>
<p><a href="website_config.php"></a><a href="about.php"></a></p>
<table width="983" height="218" border="0">
	<tr>
		<th width="174" scope="col"><a href="create_gallery.php">Create
		Gallery</a></br>
		</th>
		<th width="203" scope="col"><a href="website_config.php">Website
		configuration</a></th>
		<th width="89" scope="col"></br>
		<a href="home_config.php">Home page</a></br>
		</th>
		<th width="120" scope="col"><a href="theme.php">Change your website
		theme</a></br>
		</th>
		<th width="65" scope="col"><a href="contact_us.php">Contact us</a></br>
		</th>
		<th width="40" scope="col"><a href="about.php">How to reach us</a></th>
	</tr>
	<tr>
		<th height="132" scope="row"><a href="create_gallery.php"
			target="_blank"><img src="setup/block_yellow_128.png" width="128"
			height="128" alt="gallry" /></a></th>
		<td>
		<center><a href="website_config.php" target="_blank"><img
			src="setup/settings_adv_32.png" alt="config" width="68" height="60"
			align="middle" /></a></center>
		</td>
		<td>
		<center><a href="home_config.php" target="_blank"><img
			src="setup/gener_rooms.png" width="48" height="48" alt="home" /></a></center>
		</td>
		<td>
		<center><a href="theme.php" target="_blank"><img
			src="setup/view_define_32.png" width="32" height="32" alt="theme" /></a></center>
		</td>
		<td>
		<center><a href="contact_us.php" target="_blank"><img
			src="setup/must_be_32.png" width="32" height="32" alt="contact" /></a></center>
		</td>
		<td>
		<center><a href="about.php" target="_blank"><img
			src="setup/edit_32 - Copy.png" width="32" height="32" alt="about" /></a></center>
		</td>
	</tr>
</table>
<p><a href="page1.php">page1</a></p>
<p><a href="page2.php">page2</a></p>
<p><a href="page3">page3</a></p>
<p><a href="map.php">Google Map</a></p>
<p><a href="sns.php">Social networks</a></p>
<p><a href="explore.php">Explore</a></p>
<p><a href="doctor_practice.php">Doctor Practice</a></p>
