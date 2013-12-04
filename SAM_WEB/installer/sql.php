<?php
require 'db_conx.php';


//
//--
//-- Table structure for table `about`
//--

$about="CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysql_query($about);
    
//--
//-- Dumping data for table `about`
//--

$ab="INSERT INTO `about` (`id`, `about`) VALUES
(1, 'test')";

mysql_query($ab);
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `admin`
//--

$admin="CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ";

mysql_query($admin);

//-- --------------------------------------------------------
//
//--
//-- Table structure for table `answers`
//--

$ans="CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` longtext NOT NULL,
  `user` varchar(50) NOT NULL,
  `question_id` int(11) NOT NULL,
  `last_reply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3" ;

mysql_query($ans);

//--
//-- Dumping data for table `answers`
//--

$ansi="INSERT INTO `answers` (`answer_id`, `answer`, `user`, `question_id`, `last_reply`) VALUES
(1, 'how r u', '', 1, '2013-11-19 09:09:15'),
(2, 'f9', '', 1, '2013-11-19 09:09:31')";

mysql_query($ansi);

//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `apo`
//--

$apo="CREATE TABLE IF NOT EXISTS `apo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `phone` double NOT NULL,
  `location` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_time` varchar(10) NOT NULL,
  `apo_date` varchar(10) NOT NULL,
  `problem_description` longtext NOT NULL,
  `test` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3" ;

mysql_query($apo);
//--
//-- Dumping data for table `apo`
//--

$apoi="INSERT INTO `apo` (`id`, `name`, `phone`, `location`, `email`, `hospital_name`, `hospital_time`, `apo_date`, `problem_description`, `test`, `gender`) VALUES
(1, '1234567890', 0, 'noida', 'naveen@naveen.com', 'appolo', '10:00', '11-29-13', 'description', 'faltu', ''),
(2, '1234567890', 1234567890, 'noida', 'naveen@naveen.com', 'appolo', '10:00', '11-29-13', 'gcghcghcggh', 'faltu', '')";

mysql_query($apoi);

//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `apo_master`
//--

$apo_m="CREATE TABLE IF NOT EXISTS `apo_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(30) NOT NULL,
  `location` varchar(40) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($apo_m);
//--
//-- Dumping data for table `apo_master`
//--

$apo_mi="INSERT INTO `apo_master` (`id`, `h_name`, `location`, `time`) VALUES
(1, 'appolo', 'noida', '10:00')";
mysql_query($apo_mi);
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `appointments`
//--

$apoint="CREATE TABLE IF NOT EXISTS `appointments` (
  `phone_num` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `fax` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

mysql_query($apoint);

//
//--
//-- Dumping data for table `appointments`
//--

$apointi="INSERT INTO `appointments` (`phone_num`, `city`, `email`, `website`, `fax`) VALUES
('1', '', '', '', '')";
mysql_query($apointi);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `articles`
//--

$ar="CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(20) NOT NULL AUTO_INCREMENT,
  `article_topic_id` varchar(100) DEFAULT NULL,
  `article` varchar(4000) NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($ar);
//--
//-- Dumping data for table `articles`
//--

$ari="INSERT INTO `articles` (`article_id`, `article_topic_id`, `article`, `article_date`) VALUES
(1, 'Sample', '', '2013-12-01 18:30:00')";

mysql_query($ari);

//-- --------------------------------------------------------
//
//--
//-- Table structure for table `article_topic`
//--

$art="CREATE TABLE IF NOT EXISTS `article_topic` (
  `article_topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_topic` varchar(100) NOT NULL,
  PRIMARY KEY (`article_topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($art);
//--
//-- Dumping data for table `article_topic`
//--

$arti="INSERT INTO `article_topic` (`article_topic_id`, `article_topic`) VALUES
(1, 'Sample')";
mysql_query($arti);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `ask_me`
//--

$ask="CREATE TABLE IF NOT EXISTS `ask_me` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `question_title` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";

mysql_query($ask);
//--
//-- Dumping data for table `ask_me`
//--

$aski="INSERT INTO `ask_me` (`question_id`, `question`, `user_email`, `question_title`, `city`) VALUES
(1, 'hi..', '', 'hello', '')";
mysql_query($aski);
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `contact_us`
//--

$con="CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_num` varchar(50) NOT NULL,
  `contact_feed_back` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($con);
//--
//-- Dumping data for table `contact_us`
//--

$conus="INSERT INTO `contact_us` (`contact_id`, `hos_name`, `contact_email`, `contact_num`, `contact_feed_back`) VALUES
(1, 'my clinic', 'sam.nyx@live.com', '+91 9818776287', 'Apollo Hospital sec-26 Noida')";

mysql_query($conus);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `doctor_practice`
//--

$dp="CREATE TABLE IF NOT EXISTS `doctor_practice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(30) NOT NULL,
  `location` varchar(35) NOT NULL,
  `day` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `phone` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6" ;

mysql_query($dp);
//--
//-- Dumping data for table `doctor_practice`
//--

//$dpi="INSERT INTO `doctor_practice` (`id`, `h_name`, `location`, `day`, `time`, `designation`, `phone`) VALUES
//(2, 'clinic 1', 'noida', 'mon to fri', '10:30', 'des', 78446544646),
//(3, 'Apollo Hospital, Noida', 'Greater noida', 'mon to sat', '1:00', 'consultant ', 78446544646),
//(4, 'KAILASH HOSPITAL PVT. LTD. ', 'Greater noida', 'mon to fri', '12:00', 'consultant ', 78446544646),
//(5, 'clinic 123', 'noida', 'mon to sat', '10:00', 'des', 78446544646)";
//
//mysql_query($dpi);

//-- --------------------------------------------------------
//
//--
//-- Table structure for table `events`
//--

$event="CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(20) NOT NULL,
  `event_heading` varchar(100) NOT NULL,
  `event_details` mediumtext NOT NULL,
  `event_image` varchar(60) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
mysql_query($event);
//
//--
//-- Dumping data for table `events`
//--

$eventi="INSERT INTO `events` (`event_id`, `event_type`, `event_heading`, `event_details`, `event_image`) VALUES
(1, 'Sample', '', '', '')";
mysql_query($eventi);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `event_topic`
//--

$eventt="CREATE TABLE IF NOT EXISTS `event_topic` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_topic_name` varchar(15) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($eventt);
//--
//-- Dumping data for table `event_topic`
//--

$eti="INSERT INTO `event_topic` (`event_id`, `event_topic_name`) VALUES
(1, 'Sample')";
mysql_query($eti);
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `explore`
//--

$explore="CREATE TABLE IF NOT EXISTS `explore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(30) NOT NULL,
  `contain` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ";
mysql_query($explore);
//--
//-- Dumping data for table `explore`
//--

$explorei="INSERT INTO `explore` (`id`, `topic`, `contain`) VALUES
(1, 'smartphones', 'Best Black Friday deals on smartphones, tablets and other electronics | read the story here: http://ift.tt/1auqCxS ... The shopping craziness of Black Friday kicks off on November 29th and some stores will open as early as the preceding evening? www.facebook.com'),
(5, 'Android', 'Android user accidentally sexts his mom, blames third party SMS app | There are a lot of things that can be embarrassing, but right at the top of the list has to be accidentally sexting your mom. Just the thought of it will make many of our readers cringe. One anonymous Android user, who uses the third party messaging app hello was planning on sending to his mom a picture of a car that he was interested in buying. But he accidentally clicked on a picture of his private parts which he was storing on his phone...'),
(6, 'Nokia', 'Nokia said to be working on a dual-SIM Windows Phone ----- read here: http://ift.tt/IlFIfI ----- Depending on where you live, you may, or may not, need us telling you just how popular dual-SIM phones are, at least in developing countries. Dual-SIM capabilities are nothing to sneeze at...')";
mysql_query($explorei);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `feedback`
//--

$fback="CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_type` varchar(40) NOT NULL,
  `feedback_name` varchar(50) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback_num` varchar(50) NOT NULL,
  `feedback_details` longtext NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

mysql_query($fback);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `gallery_image`
//--

$gallery="CREATE TABLE IF NOT EXISTS `gallery_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(35) NOT NULL,
  `gallery_topic` varchar(100) NOT NULL,
  `image_details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

mysql_query($gallery);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `gallery_topic`
//--

$gtopic="CREATE TABLE IF NOT EXISTS `gallery_topic` (
  `gallery_tipic_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_topic` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_tipic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4" ;

mysql_query($gtopic);
//--
//-- Dumping data for table `gallery_topic`
//--
//
//INSERT INTO `gallery_topic` (`gallery_tipic_id`, `gallery_topic`) VALUES
//(1, 'sam'),
//(2, 'mac'),
//(3, 'ent');
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `home`
//--

//CREATE TABLE IF NOT EXISTS `home` (
//  `doc_name` varchar(40) NOT NULL,
//  `doc_degree` varchar(40) NOT NULL,
//  `doc_speciality` varchar(40) NOT NULL,
//  `doc_tag` varchar(40) NOT NULL,
//  `doc_logo` varchar(40) NOT NULL,
//  `doc_photo` varchar(40) NOT NULL,
//  `doc_sld_image` varchar(100) NOT NULL,
//  `doc_intro` varchar(200) NOT NULL,
//  `clinc_name` varchar(200) NOT NULL,
//  `clinc_intro` varchar(200) NOT NULL,
//  `mape_image` varchar(200) NOT NULL,
//  `clinc_apo` varchar(200) NOT NULL,
//  `clinc_add` varchar(200) NOT NULL,
//  `clinc_email` varchar(200) NOT NULL,
//  `topic1` varchar(200) NOT NULL,
//  `topic2` varchar(200) NOT NULL,
//  `topic3` varchar(200) NOT NULL,
//  `facebook_link` varchar(200) NOT NULL,
//  `linklin_link` varchar(200) NOT NULL,
//  `youtub_link` varchar(200) NOT NULL,
//  `twitt_link` varchar(200) NOT NULL,
//  `google+_link` varchar(200) NOT NULL,
//  `vedio_link` varchar(200) NOT NULL
//) ENGINE=InnoDB DEFAULT CHARSET=latin1;
//
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `home_container`
//--

$hc="CREATE TABLE IF NOT EXISTS `home_container` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txt1` mediumtext NOT NULL,
  `txt2` mediumtext NOT NULL,
  `img1` varchar(55) NOT NULL,
  `img2` varchar(55) NOT NULL,
  `c1` varchar(30) NOT NULL,
  `c2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($hc);
//--
//-- Dumping data for table `home_container`
//--

$hci="INSERT INTO `home_container` (`id`, `txt1`, `txt2`, `img1`, `img2`, `c1`, `c2`) VALUES
(1, 'sample text1', 'sample text2', '', '', '3DC5FF', '7E75FF')";

mysql_query($hci);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `hospitals`
//--

$hos="CREATE TABLE IF NOT EXISTS `hospitals` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `hospital_address` varchar(50) NOT NULL,
  `timing_details` varchar(50) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;
mysql_query($hos);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `map`
//--

$map="CREATE TABLE IF NOT EXISTS `map` (
  `id` int(11) NOT NULL,
  `map` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

mysql_query($map);
//--
//-- Dumping data for table `map`
//--

$mapi="INSERT INTO `map` (`id`, `map`) VALUES
(1, '')";

mysql_query($mapi);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `packages`
//--

$pack="CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(30) NOT NULL,
  `package_details` varchar(50) NOT NULL,
  `package_is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";

mysql_query($pack);
//--
//-- Dumping data for table `packages`
//--

$packi="INSERT INTO `packages` (`package_id`, `package_name`, `package_details`, `package_is_active`) VALUES
(1, 'sample', 'SAMPLE', 1)";
mysql_query($packi);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `page1`
//--

$pag1="CREATE TABLE IF NOT EXISTS `page1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(66) NOT NULL,
  `page_heading` varchar(33) NOT NULL,
  `page_containt` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;

mysql_query($pag1);
//
//--
//-- Dumping data for table `page1`
//--

$page1i="INSERT INTO `page1` (`id`, `img`, `page_heading`, `page_containt`) VALUES
(1, 'images/baby-blue-solid.jpg', 'my page1', 'page 1 sample data.')";

mysql_query($page1i);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `page2`
//--

$page2="CREATE TABLE IF NOT EXISTS `page2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(66) NOT NULL,
  `page_heading` varchar(33) NOT NULL,
  `page_containt` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysql_query($page2);
//--
//-- Dumping data for table `page2`
//--

$page2i="INSERT INTO `page2` (`id`, `img`, `page_heading`, `page_containt`) VALUES
(1, 'images/n82yTp8.jpg', 'my page2', 'page 2 sample data.')";
mysql_query($page2i);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `page3`
//--

$page3="CREATE TABLE IF NOT EXISTS `page3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(66) NOT NULL,
  `page_heading` varchar(33) NOT NULL,
  `page_containt` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysql_query($page3);
//--
//-- Dumping data for table `page3`
//--

$page3i="INSERT INTO `page3` (`id`, `img`, `page_heading`, `page_containt`) VALUES
(1, 'images/YJZD6Dr.png', 'page3', 'page 3 sample data.')";
mysql_query($page3i);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `profile`
//--

$profile="CREATE TABLE IF NOT EXISTS `profile` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(30) NOT NULL,
  `img` varchar(55) NOT NULL,
  `speciality` varchar(35) NOT NULL,
  `registration` varchar(40) NOT NULL,
  `appointent` varchar(45) NOT NULL,
  `email` varchar(55) NOT NULL,
  `introduction` longtext NOT NULL,
  `experience` longtext NOT NULL,
  `education` longtext NOT NULL,
  `achievement` longtext NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysql_query($profile);
//--
//-- Dumping data for table `profile`
//--

$profilei="INSERT INTO `profile` (`doc_id`, `doc_name`, `img`, `speciality`, `registration`, `appointent`, `email`, `introduction`, `experience`, `education`, `achievement`) VALUES
(1, 'Sample', '', 'SAMPLE', '', '', '', '', '', '', '')";
mysql_query($profilei);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `services`
//--

$service="CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL,
  `main_topic` varchar(55) NOT NULL,
  `service_topic` varchar(40) NOT NULL,
  `service_image` varchar(50) NOT NULL,
  `service_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysql_query($service);
//--
//-- Dumping data for table `services`
//--

$servicei="INSERT INTO `services` (`service_id`, `main_topic`, `service_topic`, `service_image`, `service_details`) VALUES
(1, 'sample', 'SAMPLE', '', 'sas')";
mysql_query($servicei);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `service_topic`
//--

$sertopic="CREATE TABLE IF NOT EXISTS `service_topic` (
  `service_topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_topic` varchar(1000) NOT NULL,
  PRIMARY KEY (`service_topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3" ;
mysql_query($sertopic);
//--
//-- Dumping data for table `service_topic`
//--

$sertopici="INSERT INTO `service_topic` (`service_topic_id`, `service_topic`) VALUES
(1, 'sample'),
(2, 'sample')";
mysql_query($sertopici);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `sns`
//--

$sns="CREATE TABLE IF NOT EXISTS `sns` (
  `id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `twit` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysql_query($sns);
//--
//-- Dumping data for table `sns`
//--

$snsi="INSERT INTO `sns` (`id`, `facebook`, `twitter`, `twit`) VALUES
(1, 'https://www.facebook.com/sam0hack', 'https://twitter.com/sam_codex8', 'PGEgY2xhc3M9InR3aXR0ZXItdGltZWxpbmUiIGhyZWY9Imh0dHBzOi8vdHdpdHRlci5jb20vc2FtX2NvZGV4OCIgZGF0YS13aWRnZXQtaWQ9IjQwNTYyMTcwMzIxODE4ODI4OCI+VHdlZXRzIGJ5IEBzYW1fY29kZXg4PC9hPiA8c2NyaXB0PiFmdW5jdGlvbihkLHMsaWQpe3ZhciBqcyxmanM9ZC5nZXRFbGVtZW50c0J5VGFnTmFtZShzKVswXSxwPS9eaHR0cDovLnRlc3QoZC5sb2NhdGlvbik/J2h0dHAnOidodHRwcyc7aWYoIWQuZ2V0RWxlbWVudEJ5SWQoaWQpKXtqcz1kLmNyZWF0ZUVsZW1lbnQocyk7anMuaWQ9aWQ7anMuc3JjPXArIjovL3BsYXRmb3JtLnR3aXR0ZXIuY29tL3dpZGdldHMuanMiO2Zqcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShqcyxmanMpO319KGRvY3VtZW50LCJzY3JpcHQiLCJ0d2l0dGVyLXdqcyIpOzwvc2NyaXB0Pg==')";
mysql_query($snsi);
//-- --------------------------------------------------------
//
//--
//-- Table structure for table `website`
//--

$website="CREATE TABLE IF NOT EXISTS `website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(12) NOT NULL,
  `site_name` varchar(20) NOT NULL,
  `tag_line` varchar(35) NOT NULL,
  `footer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysql_query($website);
//--
//-- Dumping data for table `website`
//--

$websitei="INSERT INTO `website` (`id`, `title`, `site_name`, `tag_line`, `footer`) VALUES
(1, 'SAMPLE', 'my website', '', 'footer here')";
mysql_query($websitei);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */




header('location:admin.php');
?>