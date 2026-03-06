<?php
	$batman = 13;
	$Jomker = 13;
	?>


<html lang="en">
<head>    
    <title><?php printf("Mostalogic");?></title>

</head>
<body>
    <h2>Nomthing</h2>
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>

  <?php
  for ($i = 0; $i <= $Jomker; $i++) {
  ?>

  <tr>
					<th>
						<?= $i ?>
					</th>
					<th>+</th>
					<th>
						<?= $batman ?>
					</th>
					<th>=</th>
					<th>
						<?= $i + $batman ?>
					</th>
				</tr>

        
  <?php
  }
  ?>
  
</table>

</body>

</html>