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
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$categoryID = $_POST['categoryID'];
$price = $_POST['price'];
$sql1 = "SELECT * FROM menuItem WHERE itemID=$item_id";
$result = $con->query($sql1);

if ($item_id != ""){
    if ($result->num_rows == 0) {
        echo "No such item. Please go back to the previous page.";
    }else {
        if ($item_name != ""){
            $sql = "UPDATE menuItem ".
                   "SET itemName = '$item_name' ".
                   "WHERE itemID = $item_id" ;
            if ($con->query($sql) === TRUE) {
                echo "<br> Item name updated successfully ";
                } else {
                    echo "<br>Error updating item name";
                } 
        }
        if ($categoryID != ""){
            $sql = "UPDATE menuItem ".
                   "SET categoryID = $categoryID ".
                   "WHERE itemID = $item_id" ;
            if ($con->query($sql) === TRUE) {
            echo "<br> Category ID updated successfully ";
                } else {
                    echo "<br>Error updating category ID ";
                }  
        }
        if ($price!= ""){
            $sql = "UPDATE menuItem ".
                   "SET price = $price ".
                   "WHERE itemID = $item_id" ;  
            if ($con->query($sql) === TRUE) {
                echo "<br> Price updated successfully ";
                } else {
                    echo "<br>Error updating price ";
                }  
        }
        if ($item_name=="" && $category_ID=="" && $price=="") {
            echo "Nothing happened";
        }
    }
}else {
    echo "<br>No such item and please go back to the previous page" . $con->error;
}

?>

<?php
$con->close();
?>  

</body>
</html>