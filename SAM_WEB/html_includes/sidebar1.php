<div id="site_content">
    <div id="sidebar_container1">
       <div class="sidebar">
      <div class="right_sidebar">
		
		 <div	id="right_top">Doctor's Practice</div>
			     
                
       <div>   <!-- start hospital name button-->
        <?php $dp=  dp();
        $ary=array('a','b','c','d');
        
        $ay=0;
 while ($d=  mysql_fetch_array($dp))

                 {



 
        ?>
          <div>   <input type="button" value="<?php  echo $d['h_name']; ?>" id="square" class="a" /></div>
          <div id="<?php echo $ay; ?>">
				  				
									<?php echo $d['location']; ?><br />
									Designation: <?php echo $d['designation']; ?><br />
               						Timing: </br>
									<?php echo $d['day']; ?><br />
									<?php echo $d['time']; ?><br />
									contact:<?php echo $d['phone']; ?>
					
					
                </div>
          
							
 <?php $ay++; }  ?>
</div>
    </div>
</div>
    </div>