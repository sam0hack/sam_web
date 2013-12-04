<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<table width="700" border="1">
	<tr>
		<th scope="col"><a
			href="admin/<?php $img=profile('bio'); echo $img['img']; ?>"><img
			height="150px" width="150px"
			src="admin/<?php $img=profile('bio'); echo $img['img']; ?>" /></a></th>
		<th width="540" scope="col"><?php  $bio=profile('bio'); 

			
		echo '<p><b>Name :</b> '.$bio['doc_name'].'</br>';
		echo '<b> Speciality :</b> '.$bio['speciality'].'</br>';
		echo '<b> Registration :</b> '.$bio['registration'].'</br>';
		echo '<b> Appointment  :</b> '.$bio['appointent'].'</br>';
		echo '<b> Email :</b> '.$bio['email'].'</p>';

		?></th>
	</tr>
</table>



<table align="top" width="700" height="150" border="1">
	<tr>
		<th scope="col">
		<center><u>Introduction</u></center>
		<br />
		<p><?php  $intro=profile('bio'); echo $intro['introduction']; ?></p>

		<center><u>Experience</u></center>
		<br />
		<p><?php  $exp=profile('bio'); echo $exp['experience']; ?></p>
		<center><u>Education</u></center>
		<br />
		<p><?php  $edu=profile('bio'); echo $edu['education']; ?></p>

		<center><u>Achievements</u></center>
		<p><?php  $ach=profile('bio'); echo $ach['achievement']; ?></p>
		<br />

		</th>
	</tr>
</table>
</div>
</div>
		<?php require 'html_includes/footer.php'; ?>







