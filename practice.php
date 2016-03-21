<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>練習課程</title>
	<link rel="stylesheet" href="practicestyle.css">
</head>
<body>
	<?php
	
	$sid = [["1110134005","李均容"],["1110134006","林 俐"],["1110134008","林宜儒"],["1110134009","林俞安"],["1110134020","馮莉茵"],["1110134025","朱柏翰"],["1110134030","林家任"],["1110134046","鄭惟仁"],["1110134047","謝和憲"]];

 ?>
 <div id = "wapper">
 	<div id = "header">
 		<h2>PHP寒訓名單</h2>
 	</div>
 	<div id = "content">
 		<?php
 			echo '學號';
  			echo '姓名';
 		?>
 	</div>
 	<div class = "content1">
 		<?php 
 			for ($i=0; $i<count($sid);$i++){ 
 					echo '<tr>';
 					for ($j=0; $j<count($sid[$i]);$j++){ 
 						echo '<td>';
 						echo $sid[$i][$j].' ';
 					}
 				}
 		 ?>
 	</div>
 </div>
</body>
</html>