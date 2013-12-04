<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>ADMIN PANEL</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jscolor.js"></script>

</head>
<body>


<ul id="MenuBar1" class="MenuBarHorizontal">
	<li><a href="home.php">Home</a></li>
	<li><a href="doctorprofile.php">Doctor Profile</a></li>
	<li><a href="feedbacks.php">FeedBacks</a></li>
	<li><a href="#" class="MenuBarItemSubmenu">Events</a>
	<ul>
		<li><a href="events_topic.php" title="add event topic">Add Event Topic</a></li>
		<li><a href="add_event.php">Add an Event</a></li>
	</ul>
	</li>
	<li><a href="service_topic.php" class="MenuBarItemSubmenu">Services</a>
	<ul>
		<li><a href="service_topic.php">Add service topic</a></li>
		<li><a href="add_service.php">Add service</a></li>
	</ul>
	</li>
	<li><a href="articles.php">Article</a></li>
	<li><a href="ask.php">ask</a></li>
	<!--  <li><a href="question_answers.php">Question/Answers</a></li>-->
	<li><a href="#" class="MenuBarItemSubmenu">Package</a>
	<ul>
		<li><a href="package.php">Add Package</a></li>
		<li><a href="package_list.php?page=active">Active Package's</a></li>
		<li><a href="package_list.php?page=inactive">Inactive Package's</a></li>
	</ul>
	</li>

	

        	<li><a href="#" class="MenuBarItemSubmenu">Appointments</a>
	<ul>
		<li><a href="viewapo.php">View appointments</a></li>
                <li><a href="apo_master.php">Add your appointment detail</a></li>

	</ul>
	</li>

        
        
	<li><a href="logout.php">Logout</a></li>

</ul>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<br>