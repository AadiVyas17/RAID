<!DOCTYPE html>
<html lang="en">
<head>
	<title>RAID ANALYSIS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('img.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<?php
					$capacity=$_POST["choice"];
					$speed=$_POST["speed"];
					$protect=$_POST["protect"];
					
					$Data_protect = array(0,1,1,2,2);
					$write_speed = array(2,1,0,0,1);
					$capacity_utilize = array(2,0,1,1,0);
					
					$result = array(0,0,0,0,0);
					$min = 100;
					$val=100;
					for ($i=0;$i<5;$i++)
					{
						$result[$i] += abs($capacity-$capacity_utilize[$i]);
						$result[$i] += abs($speed-$write_speed[$i]);
						$result[$i] += abs($protect-$Data_protect[$i]);
						
						if ($result[$i]<$min)
						{
							$min = $result[$i];
							$val = $i;
							$flag = 0;
						}
						else if ($result[$i] == $min)
						{
							$flag = 1;
							$arr = array($val,$i);
						}
					}
					if ($flag == 0)
					{
						$raid = raid($val);
					}
					else
					{
						$raid = raid($arr[0]);
						$raid .= " OR ".raid($arr[1]);
					}
					
					
					function raid($val)
					{
						switch($val)
						{
							case 0:
								$raid = "RAID 0";
								break;
							case 1:
								$raid = "RAID 1";
								break;
							case 2:
								$raid = "RAID 5";
								break;
							case 3:
								$raid = "Raid 6";
								break;
							case 4:
								$raid = "Raid 10";
								break;
							
						}
						return $raid;
					}
					
					echo "<b>Predicted Raid:&nbsp&nbsp&nbsp$raid</b>";
				?>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

</body>
</html>
