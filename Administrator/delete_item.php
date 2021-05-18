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

// SQL statement for deleting a record

$id = $_POST['item_id'];
$sql_delete = "DELETE FROM menuItem where itemID=$id";
$sql = "SELECT * FROM menuItem WHERE itemID=$id";
$result = $con->query($sql);

if ($id == "") {
    echo "Please enter item ID. Will return to the previous page in 2 seconds";
    header('refresh:2; url=delete_item.html');
}else if ($result->num_rows == 0) {
    echo "No such item. Will return to the previous page in 2 seconds";
    header('refresh:2; url=delete_item.html');
}else if ($con->query($sql_delete) === TRUE) {
    echo "Item deleted successfully and will return to the previous page in 2 seconds";
    header('refresh:2; url=delete_item.html');
} else {
    echo "<br><b>Error deleting values: </b>" . $con->error;
    echo "Will return to the previous page in 2 seconds";
    header('refresh:2; url=delete_item.html');
}
?>

<?php
$con->close();
?>  

</body>
</html>