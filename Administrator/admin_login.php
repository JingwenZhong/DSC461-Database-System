<?php 
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname == "" || $password == "") {   
        echo "Username or Password cannot be empty. You will be redirected to login page in 1.5 sec.";
        header('refresh:1.5; url=admin_login.html');
    }else if ($uname != "" && $password != ""){

            $sql_query = "select count(*) as cntUser from Adm where ID='".$uname."' and passwd='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);

            $count = $row['cntUser'];

            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: admin.php');
            }else{
                echo "Invalid username and password. You will be redirected to login page in 1.5 sec.";
                header('refresh:1.5; url=admin_login.html');
            }

    }

}
?>