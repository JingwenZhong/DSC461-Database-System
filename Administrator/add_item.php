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

<?php
include "config.php";

// SQL statement for adding a new record
$sql_insert = "INSERT INTO menuItem (itemName, categoryID, price)
VALUES ('$_POST[item_name]', '$_POST[categoryID]', '$_POST[price]')";

if ($con->query($sql_insert) === TRUE) {
    echo "<br>Item added successfully and will return to the previous page in 2 seconds";
    header('refresh:2; url=Add_admin.html');
} else {
    echo "<br>Error adding values " . $con->error;
    echo "Will return to the previous page in 2 seconds";
    header('refresh:2; url=Add_admin.html');
}

?>

<?php
$con->close();
?>

</body>
</html>