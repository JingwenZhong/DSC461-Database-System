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

// SQL statement for creating a table
// $sql_select = "SELECT * FROM Boats";

$sql = "SELECT * FROM orders";
$result = $con->query($sql);

if($result->num_rows > 0){
    echo "Information of all orders. Please use the View Order Includes link to see additional information.";
?>
   <table class="table table-striped">
      <tr>
         <th>Order Id</th>
         <th>Phone Number</th>
         <th>ETA</th>
         <th>Order Time</th>
         <th>Notes</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
        <td><?php echo $row['orderID']?></td>
        <td><?php echo $row['phoneNumber']?></td>
        <td><?php echo $row['estPickupTime']?></td>
        <td><?php echo $row['orderTime']?></td>
        <td><?php echo $row['customizedNote']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display. Please go back to the previous page.";
}
?>

    </table>

<?php
$con->close();
?>  

</body>
</html>
