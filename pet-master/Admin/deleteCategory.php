<?php
include('control.php');
$get_data=new data();
$delete=$get_data->delete_cat($_GET['del']); 
if($delete) header('location:category.php');
else echo "not delete";
?>
