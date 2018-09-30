<?php 
session_start();
$tmpl1=$_SESSION['arr1'];
$tmpl2=$_SESSION['arr2'];
$tmpl3=$_SESSION['arr3'];
 ?>
<table>
	<tr>
		<td>USER</td>
		<td><?php foreach ($tmpl1 as $nilai1): 
			 echo $nilai1. "<br>"; ?>
			 <?php endforeach ?></td>
		</td>
	</tr>
	<tr>
		<td>FILM:</td>
		<td><?php foreach ($tmpl2 as $nilai2):
			 echo $nilai2."<br>"; ?>
		<?php endforeach ?></td>
	</tr>

	<tr>
		<td>TEMPAT WISATA:</td>
		<td><?php foreach ($tmpl3 as $nilai3):
			 echo $nilai3."<br>"; ?>
			 <?php endforeach ?></td>
		</td>
	</tr>
	
</table>
