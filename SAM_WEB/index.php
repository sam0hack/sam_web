<?php
$fo=fopen("installer/config/user.txt","r");
$user=fgets($fo);
if ($user==NULL)
{
	header('location:installer/index.php');
}
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>

<div class="content">
	<div><!--top center container-->
  	<div style="width:98%; margin:0 auto;">
    	<div id="slides" style=" width:100%; position:relative; height:310px; overflow:hidden">
            <div style="position:absolute; z-index:1; background:<?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo '#'.$h['c1'];
                          
                          ?>; width:100%;" id="fst">
                <div id="lhs_content" style="text-align:justify; float:left; width:48%; padding-left:1%; height:310px; overflow:hidden">
                      <p>
                          <?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo $h['txt1'];
                          
                          ?>
                      </p>
                 </div>
    			<div style="float:right; width:50%; ">    		
                            <img src="admin/<?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo $h['img1'];
                          
                          ?>" width="100%" height="310" alt="" title="CLINIC PHOTO" style="position:absolute; z-index:1;"/>
                        </div>
             </div>   
              <div style="position:absolute; z-index:2; background:<?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo '#'.$h['c2'];
                          
                          ?>;  width:100%; height:310px; overflow:hidden" id="sec">
                <div id="lhs_content" style="text-align:justify; float:left; width:48%; padding-left:1%;">
                      <p>
                     <?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo $h['txt2'];
                          
                          ?>
                      </p>
                 </div>
    			<div style="float:right; width:50%; ">    		
        			 <img src="admin/<?php $home=  home();
                          $h=  mysql_fetch_array($home);
                         echo $h['img2'];
                          
                          ?>" alt="" width="100%" height="310" title="CLINIC PHOTO" style="position:absolute; z-index:2;"  />
              </div>
            </div>  
               <div style="clear:both"></div>
             </div>  
         <div style="clear:both"></div>
         <script type="text/javascript">
var A=2;
var B=1;
var Temp;
	function beChanging()
	{
	Temp=B;   B=A; A=Temp;
	document.getElementById('fst').style.zIndex = A;
	document.getElementById('sec').style.zIndex = B;
	setTimeout("beChanging()",6000);
}
$(document).ready(function(){
	beChanging();
});
</script>

                  <div style="clear:both"></div>
         <div style=" margin:20px 0px;">
        <div style="float:left; width:65%;  padding:0px 0px;">
            	<h1 style="font-size:14px; line-height:10px;"><b>How to Reach Us</b></h1> 
            <p> <?php $about=about(); echo $about; ?> </p>
        </div>
          <div style=" width:30%; float:right; padding:10px 10px;  text-align:justify; font-size:12px;line-height:20px;"> 
                    <strong>Contact Us</strong><br />
                    <b> For more details </b><br />
                    <img src="images/phone.png" width="30" height="30" title="Call us" /><?php echo $about=contact('contact_num') ; ?><br />
                    <?php echo $about=contact('contact_feed_back') ; ?><br />
                    <br />
                    Email:<a href="mailto:<?php echo $about=contact('contact_email') ; ?>" ><?php echo $about=contact('contact_email') ; ?></a>
        </div>
        <div style="clear:both"></div>
   </div>    
   <div class="cls"></div>
       <div style="padding-left:10px;">
<!--       <h1 style="font-size:14px; line-height:10px;"><b>New look with Hair Transplants</b></h1> 
          Losing hair will not let you down anymore. Let us give you a complete make over with the ULTRA REFINED
          FOLLICULAR unit hair transplants.-->
          </div>
     </div>
     </div>
</div>
    <!-- byy -->
    <div style="width:24.9%;   float:right; margin-top:5px;">
	<div class="book-an_app" style="padding:0px; margin:10px 4px 20px 0px;"> <span>
                <a href="apo.php" title="book an appointment" style="width:100%">Book an Appointment</a></span> </div>
        <h2 style="font-size:13px; font-weight:700; color:#FFFFFF"><?php  $page=  page('page1'); echo $page['page_heading'];  ?></h2>
      <div class="uniqe" > 
      	<a href="page1.php">
            <div style="float:left; width:90px;"><img src="admin/<?php  $page=  page('page1'); echo $page['img'];  ?>" width="80px" height="80px;" /></div>
            <div style=" text-align:justify;  "> <?php  $page=  page('page1'); $str= $page['page_containt']; $sub=substr($str, 0,100); echo $sub;  ?><br />
            </div>
        </a> </div>
      <h1 style="font-size:12px;"><?php  $page=  page('page2'); echo $page['page_heading'];  ?></h1>
      <div class="uniqe" > <a href="page2.php">
        <div style="float:left; width:90px; position:relative;"> <img src="admin/<?php  $page=  page('page2'); echo $page['img'];  ?>" width="80px" height="80px;" style="position:absolute; z-index:2;" id="bst" /> <img src="../images/2.JPG" width="80px" height="80px;" style="position:absolute; z-index:1;" id="best" /> </div>
        <div style="float:right; text-align:justify; width:130px;"><?php  $page=  page('page2'); $str= $page['page_containt']; $sub=substr($str, 0,100); echo $sub;  ?><br/>
        
        </div>
        </a> </div>
      <h1 style="font-size:12px;"><?php  $page=  page('page3'); echo $page['page_heading'];  ?></h1>
      <div class="uniqe" style="height:70px;" > <a href="page3.php">
        <div style="float:left; width:90px;"><img src="admin/<?php  $page=  page('page3'); echo $page['img'];  ?>" width="80px" height="80px;" /></div>
        <div style="float:right; text-align:justify; width:130px;"> <?php  $page=  page('page3'); $str= $page['page_containt']; $sub=substr($str, 0,20); echo $sub;  ?><br>
       </div>
        </a> </div>
      <div style="margin:10px 0px 0px 0px; padding:5px;"> 
          <b>Follow Us</b> &nbsp;&nbsp;&nbsp; <a target="_blank" href="<?php $twitter=  sns('twitter'); echo $twitter['twitter']; ?>"> <img src="admin/images/tw.png" width="20" height="22"  alt="twitter" title="twitter"/> </a> <a target="_blank" href="<?php $facebook=  sns('facebook'); echo $facebook['facebook']; ?>"><img src="admin//images/fb.png" width="20" height="22" alt="facebook" title="facebook" /></a> </div>
      <div style="border-top:4px solid #325896; margin-top:13px;">
<!--       		<img src="../images/provelusmap.png" width="240" height="210" />-->

      <?php $map=  map(); echo $map['map']; ?>
      </p>
      </div>
    </div>    
            
      <div class="cls"></div>      		
 </div><!--close top center -->   
 <div class="cls"></div>   
  
    <!-- by-->
    <?php require 'html_includes/footer.php'; ?>
</div>
	