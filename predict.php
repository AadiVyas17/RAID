<!DOCTYPE html>
<html lang="en">
<head>
	<title>RAID CALCULATOR</title>
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
	<style type="text/css">
	.radio1{
		padding: 50px 5px 50px 5px;
	}
	.container-contact3-form-btn{
		padding-top: 50px;
	}
	</style>
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form action="result_predic.php" method="post"class="contact3-form validate-form" >
					<span class="contact3-form-title">
						RAID PREDICTION
					</span>

					<b>Commodity Hardware Usage</b>:<br/>
					<span class="radio1">Yes</span><input type="radio" name="choice" value="2" checked="checked">
					<span class="radio1">No</span><input type="radio" name="choice" value="0" >
					<span class="radio1">Moderate</span><input type="radio" name="choice" value="1" >
					<br/><br/>
					<b>Real time data modification:</b><br/>
					<span class="radio1">Yes</span><input type="radio" name="speed" value="2" checked="checked">
					<span class="radio1">No</span><input type="radio" name="speed" value="0" >
					<span class="radio1">Moderate</span><input type="radio" name="speed" value="1" >
					<br/><br/>
					<b>Task dependency on previously stored data:</b><br/>
					<span class="radio1">Yes</span><input type="radio" name="protect" value="2" checked="checked">
					<span class="radio1">No</span><input type="radio" name="protect" value="0" >
					<span class="radio1">Moderate</span><input type="radio" name="protect" value="1" >

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>
