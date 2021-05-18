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

// Query:
$order_id = $_POST['order_id'];
$phone_number = $_POST['phone_number'];
$estPickupTime = $_POST['estPickupTime'];
$notes = $_POST['notes'];
$sql1 = "SELECT * FROM orders WHERE orderID=$order_id";
$result = $con->query($sql1);

if ($order_id != ""){
    if ($result->num_rows == 0) {
        echo "No such order. Please go back to the previous page.";
    }else {
        if ($phone_number != "") {
            $sql = "UPDATE orders ".
                   "SET phoneNumber = '$phone_number' ".
                   "WHERE orderID = $order_id" ;
            if ($con->query($sql) === TRUE) {
                echo "<br> Phone number updated successfully";
                } else {
                    echo "<br>Error updating phone number ";
                } 
        }
        if ($estPickupTime != ""){
            $sql = "UPDATE orders ".
                   "SET estPickupTime = '$estPickupTime' ".
                   "WHERE orderID = $order_id" ;     
            if ($con->query($sql) === TRUE) {
                echo "<br> Estimate Pickup Time updated successfully";
                } else {
                    echo "<br>Error updating estimated pickup time ";
                }  
        }
        if ($notes != ""){
            $sql = "UPDATE orders ".
                   "SET customizedNote = '$notes' ".
                   "WHERE orderID = $order_id" ;
            if ($con->query($sql) === TRUE) {
                echo "<br> Notes updated successfully";
                } else {
                    echo "<br>Error updating customized notes ";
                }  
        }
        if ($phone_number=="" && $estPickupTime=="" && $notes=="") {
            echo "Nothing happened";
        }
    }
}else {
    echo "<br>No such order and please go back to the previous page<br>" . $con->error;
}

?>

<?php
$con->close();
?>  

</body>
</html>