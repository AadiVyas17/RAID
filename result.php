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

					$n=$_POST["num"];
					$s=$_POST["size"];
					$raid=$_POST["service"];
					$flag = 0;
					switch($raid)
					{
						case "RAID 0 (Stripe set)":
							$cap = $n*$s;
							$sg = "<br/>$n x Read gain<br/>$n x Write gain";
							$f = "NONE";
							if ($n%2 != 0)
							{
								$flag = 1;
								$error = "Even number of disks permitted in RAID 0";
							}
							if ($n<2)
							{
								$flag = 1;
								$error = "At least 2 disks are required for RAID 0";
							}
							break;
						case "RAID 1 (Mirror set)":
							$cap = $s;
							$sg = "<br/>$n x Read gain<br/>No Write gain";
							$x = $n-1;
							$f = "$x drive failure";
							if ($n != 2)
							{
								$flag = 1;
								$error = "There Should be exactly 2 drives in RAID 1(Mirror)";
							}
							break;
						case "RAID 5 (Parity)":
							$cap = ($n-1)*$s;
							$x = $n-1;
							$sg = "<br/>$x x Read gain<br/>No Write gain";
							$f = "1 drive failure";
							if ($n < 3)
							{
								$flag = 1;
								$error = "Minimum 3 drives required for RAID 5(Parity)";
							}
							break;
						case "RAID 6 (Double Parity)":
							$cap = ($n-2)*$s;
							$x = $n-2;
							$sg = "<br/>$x x Read gain<br/>No Write gain";
							$f = "2 drive failure";
							if ($n < 4)
							{
								$flag = 1;
								$error = "Minimum 4 drives required for RAID 6(Double Parity)";
							}
							break;
						case "RAID 1-0 (Stripe+Mirror)":
							$cap = ($n/2)*$s;
							$x = $n/2;
							$sg = "<br/>$n x Read gain<br/>$x x Write gain";
							$f = "At least 1 drive failure";
							if ($n < 4)
							{
								$flag = 1;
								$error = "Minimum 4 drives required for RAID 1-0(Stripe+Mirror)";
							}
							if ($n%2!=0)
							{
								$flag = 1;
								$error = "Even number of disks permitted in RAID 1-0";
							}
							break;
					}
					
					if ($flag != 1)
					{
						echo "<b>Capacity:</b> $cap TB<br>";
						echo "<b>Speed gain:</b> $sg<br/>";
						echo "<b>Fault tolerance:</b> $f";
					}
					else
					{
						echo "<b>Error in the data Entered:</b><br/>$error";
					}
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
