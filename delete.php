<?php
include "conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `cruds` WHERE id = $id";
$results= mysqli_query($conn,$sql);
if ($results) {
    header("location:index.php?msg=Data Deleted successfully");
}else {
    echo "Failed " . mysqli_error($conn);
}
?>