<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('refresh:1.5; url=admin_login.html');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    echo "You have logged out and you will be redirected to login page in 1.5 sec.";
    header('refresh:1.5; url=admin_login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Revolution To-Go</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="homepage_adm.css">   
</head>

<body>
    <div class="header">
        <h1>Revolution To-Go</h1>

        <p>Welcome to the Revolution Chinese Restaurant database website
        </p>
    </div>

    <div id="menu">
        <ul>
            <li> <a class="drop">Search information</a>
            <div class="dropdown_1column">
                <div class="col_1">
                        <ul class="simple">
                                <li><a href="search_order.html">Search Order</a></li>
                                <li><a href="search_item.html">Search Item</a></li>
                        </ul>
                </div>
            </div>
            </li>
            <li><a class="drop">Add/Delete information</a>
            <div class="dropdown_1column">
                <div class="col_1">
                        <ul class="simple">
                            <li><a href="Add_Delete_order.html">Add/Delete Order</a></li>
                            <li><a href="Add_Delete_item.html">Add/Delete Item</a></li>
                            <li><a href="Add_admin.html">Add Administrator</a></li>
                        </ul>
                </div>
            </div>
            </li>
            <li><a class="drop">Update information</a>
            <div class="dropdown_1column">
                <div class="col_1">
                        <ul class="simple">
                            <li><a href="Update_order.html">Update Order</a></li>
                            <li><a href="Update_item.html">Update Item</a></li>
                        </ul>
                </div>
            </div>
            </li>
            <li><a class="drop">View table</a>
                <div class="dropdown_1column">
                    <div class="col_1">
                            <ul class="simple">
                                <li><a href="view_order.php">View Order Table</a></li>
                                <li><a href="view_includes.php">View Order Includes</a></li>
                                <li><a href="view_item.php">View Item Table</a></li>
                                <li><a href="view_menuCat.php">View Categories</a></li>
                                <li><a href="view_admin.php">View Administrators</a></li>
                            </ul>
                    </div>
             </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <h2>Hello!</h2>
        <p>You are logged in. Now you can use the links above!</p>

        <form method='post' action="admin.php">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        
    </div>


    <div class="footer">
        <a>Revolution Administration</a>
    </div>
    
        
 
</body>
</html>