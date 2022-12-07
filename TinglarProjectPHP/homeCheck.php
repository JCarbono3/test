<?php

include "db-connect.php";
$txtArea = isset($_POST['txtArea']);

$sql2 = "tblProfile(info)";

$result2 = mysqli_query($connection, $sql2);//Revisar esta línea


if($sql2===null)
{

    "INSERT tblProfile(info) SET VALUE ('$txtArea')";

}

else
{
    "UPDATE tblProfile(info) SET VALUE ('$txtArea')";
}

?>