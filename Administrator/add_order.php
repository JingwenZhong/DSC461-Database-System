<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="main">
	<div class="center form-style-8">
		<form action="" method="post">
			<input type="button" value="Back" onclick="javascript:history.back(1)">
		</form>
	</div>       
</div>

<?php
include "config.php";

date_default_timezone_set("America/New_York");
$time = date("m/d/Y h:ia");
$sql_insert = "INSERT INTO orders (estPickupTime,customizedNote,phoneNumber,orderTime)
VALUES ('$_POST[estPickupTime]', '$_POST[note]', '$_POST[phone_number]', '$time')";

if ($con->query($sql_insert) === TRUE) {
    echo "Order added successfully. Here is your order ID: ".mysqli_insert_id($con);
    echo "<br>Please take note of your order ID and use it to add dishes to your order.";
} else {
    echo "<br>Error adding order " . $con->error;
    echo "Please return to the previous page.";
}

?>

<?php
$con->close();
?>

</body>
</html>