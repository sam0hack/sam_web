<?php
ob_start();
session_start();
error_reporting(0);
require_once 'access.php';

//HOME
function home() {

	$mysql=mysql_query("select * from home_container ORDER BY  `id` DESC ");

	return $mysql;

}

//WEBSITE
function website($get) {

	if ($get=='name')
	{
		$mysql=mysql_query("select site_name from website");
		$result=mysql_fetch_array($mysql);
		return $result['site_name'];
	}
	if ($get=='tagline')
	{
		$mysql=mysql_query("select tag_line from website");
		$result=mysql_fetch_array($mysql);
		return $result['tag_line'];
	}

	if ($get=='title')
	{
		$mysql=mysql_query("select title from website");
		$result=mysql_fetch_array($mysql);
		return $result['title'];
	}

}


//PROFILE
function profile($get) {

	if ($get=='bio')
	{
		$mysql=mysql_query("select * from profile");
		$result=mysql_fetch_array($mysql);
		return $result;
	}


}

//articles
function article() {
	$result=$mysql=mysql_query("select * from articles");

	return $result;

}

//footer
function footer() {
	$mysql=mysql_query("select footer from website")or die(mysql_error());
	$result=mysql_fetch_array($mysql);

	return $result;
}


//re-que
function que() {
	$result=$mysql=mysql_query("select * from ask_me ");

	return $result;

}

//services
function services() {
	$result=$mysql=mysql_query("select * from services ORDER BY  `service_id` DESC  ");

	return $result;

}

//Packages
function packages() {
	$result=$mysql=mysql_query("select * from packages ORDER BY  `package_id` DESC  ");

	return $result;

}


//About
function about() {
	$result=$mysql=mysql_query("select about from about");
	$fetch=mysql_fetch_array($result);
	$ab=$fetch['about'];
	return $ab;

}

//Contact
function contact($get) {
	$result=$mysql=mysql_query("select $get from contact_us");

	$fetch=mysql_fetch_array($result);
	$ab=$fetch[$get];
	return $ab;


}


//Event
function event() {
	$result=$mysql=mysql_query("select * from events ORDER BY  `event_id` DESC  ");

	return $result;


}

//Latest Event

function latest() {
	$result=mysql_query("select MAX(event_id) from events ")or  die(mysql_error());
	$max=mysql_fetch_array($result);
	$maximum=$max[0];
	$data=mysql_query("select * from events where event_id='$maximum' ")or  die(mysql_error());
	return $data;
}

//Appointment
function apo() {
	$result=mysql_query("select * from apo_master ")or  die(mysql_error());
	return $result;
}

//Gallery
function gallery($get) {
	if ($get=='gname')
	{
		$return=mysql_query("select * from gallery_topic");
		return $return;
	}

	$data=mysql_query("select * from gallery_image where image_id='$get' ");
	return $data;

}
//other pages 
function page($param) {
    if ($param=='page1') {
   
        $sql= mysql_query("select * from page1 where id=1");
        $page_array=mysql_fetch_array($sql);
        return $page_array;       
        
    }
  
      if ($param=='page2') {
        
          
        $sql= mysql_query("select * from page2 where id=1");
        $page_array=mysql_fetch_array($sql);
        return $page_array;       
        
          
    }
      if ($param=='page3') {
        
          
        $sql= mysql_query("select * from page3 where id=1");
        $page_array=mysql_fetch_array($sql);
        return $page_array;       
        
          
    }
}
//Map
function map() {
    $sql=  mysql_query("select map from map");
    $map=  mysql_fetch_array($sql);
    return $map;
}
//SNS
function sns($param) {
    
    if($param=='facebook')
    {
 $sql=  mysql_query("select facebook from sns");
$f=  mysql_fetch_array($sql);  
return $f;
    }
    if($param='twitter')
    {
       $sql=  mysql_query("select twitter from sns");
$f=  mysql_fetch_array($sql);  
   
return $f;

    }
    if('widget')
    {
 $sql=  mysql_query("select twit from sns");
$f=  mysql_fetch_array($sql);
$ff=$f['twit'];
$d=  base64_decode($ff);       
return $d;    

    }
    
}
//Explore
function explore($var) {
 $sql=  mysql_query("select $var from explore");
 return $sql;
}
//exp
function expq($sel,$id) {
 $sql=  mysql_query("select $sel from explore where id=$id");
 return $sql;   
}
//Doctor practice
function dp() {
    $sql=  mysql_query("select * from doctor_practice");
    return $sql;
}
?>