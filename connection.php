<?php

$username = "customer";
$password="";
$server ="localhost";
$db = "customerdetails";


$con = mysqli_connect($server,$username,$password,$db);

/*if($con)
//echo "Connection successful";
{
    ?>
    <script>
        alert('Connection Successful');
    </script>
    <?php
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}*/



?>