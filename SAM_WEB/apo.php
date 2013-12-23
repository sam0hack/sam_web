<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar1.php';
?>

<h2><?php $msg=$_REQUEST['msg']; if (!empty($msg)) { echo $msg;  }  ?></h2>
<form action="apo_form.php" method="post">
<div class="form_settings">
	<div style="width:97%; padding:1.5% 1.5%;">
		<div style="width:74%; float:left;">		
        <div style="width:49.5%; float:left; ">
        	<div style="float:left; width:40%; height:40px;">
            	<span>Phone<sup>*</sup></span>
            </div>
            <div style="float:right; width:56%; height:40px;">
				<input type="text" name="phone" value="" />
            </div>
            <div style="float:left; width:40%; height:40px;"><span>Email</span></div>
            <div style="float:right; width:56%; height:40px;">
            	<input type="text" name="email" value="" />
            </div>
            <div style="float:left; width:40%; height:40px;">
            	<span>Name</span>
            </div>
            <div style="float:right; width:56%; height:40px;">    
           	 <input type="text" name="name" value="" />
            </div>
            <div style="float:left; width:40%; height:40px;">	
<span>Purpose</span>
 </div>   
 <div style="float:right; width:56%; height:40px;">    
     <input type="text" name="test">
 </div>
        <div style="float:left; width:100%; height:40px;">	

<span style="margin-top:0px;">Describe your problem</span>
</div>
<div style="float:left; width:100%; height:40px;">    
	<span><textarea name="desc" style="width:390px; height:100px;"></textarea></span>
    </div>
</div>



<div style="width:49.5%; float:right;">
<div style="float:left; width:40%; height:40px;">
	<P style="text-align:right">Hospital/Clinic</P>
    </div>
    <div style="float:right; width:56%; height:40px;">    
    <select name="h_name">
			
    <option>Select Hospital/Clinic</option>
	<?php $ap=apo();
	while ($apo=mysql_fetch_array($ap))
	{
		echo '<option>'.$apo['h_name'].'</option>';
	}

	?>
</select>
</div>
<div style="float:left; width:40%; height:40px;">
	<P style="text-align:right">Appointment Date</P>
</div>	
<div style="float:right; width:56%; height:40px;">    
<input type="date" name="date" placeholder="M-D-Y" >
</div>
<div style="float:left; width:40%; height:40px;">	
	<P style="text-align:right">Appointment Time</P> 
</div>
<div style="float:right; width:56%; height:40px;">    
    <select name="time">
        <option>Select Time</option>
        
        <?php $ap=apo();
        while ($apo=mysql_fetch_array($ap))
        {
            echo '<option>'.$apo['time'].'</option>';
        }
    
        ?>
    </select>
</div>


<div style="float:left; width:40%; height:40px;">	
<P style="text-align:right">Location</P>
 </div>   
 <div style="float:right; width:56%; height:40px;">    
     <select name="location">
	<option>Select Location</option>
    
	<?php $ap=apo();
	while ($apo=mysql_fetch_array($ap))
	{
		echo '<option>'.$apo['location'].'</option>';
	}

	?>
</select>
</div>
</div>
</form>
</div>
<div>


<span style="margin:30px 0px 0px 380px;">
   <input class="submit" type="submit" name="button" value="Book Appointment"  /></span>
<!--	<div class="book-an_app" style="padding:0px; margin:10px 4px 20px 0px;"> <span>
    	<a href="apo.php" title="book an appointment" style="width:100%; text-align:center">Book an Appointment</a></span> </div>-->
</div>

<div class="cls"></div>

<!--<div class="content">sdsvfdgdfgdrgdr rabindra</div>-->
</div>
<div class="cls"></div>
</div>
<div class="cls"></div>
</div>
<div class="cls"></div>
	<?php require 'html_includes/footer.php'; ?>
