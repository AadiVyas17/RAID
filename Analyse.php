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
				<form action="result.php" method="post"class="contact3-form validate-form">
					<span class="contact3-form-title">
						RAID ANALYSIS
					</span>				

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="num" placeholder="Number of disks">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="size" placeholder="Size of single disk(TB)">
						<span class="focus-input3"></span>
					</div>
					<div>
						<div>
							<select class="selection-2" name="service">
								<option>RAID 0 (Stripe set)</option>
								<option>RAID 1 (Mirror set)</option>
								<option>RAID 5 (Parity)</option>
								<option>RAID 6 (Double Parity)</option>
								<option>RAID 1-0 (Stripe+Mirror)</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn" type="submit">
							Calculate
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

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