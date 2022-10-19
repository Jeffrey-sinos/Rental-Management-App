<?php 	
require_once '../config.php';
session_start();

if(isset($_POST['pid-btn'])) //to delete a property for sale
{
	$pid = $_POST['pid'];

	$sql = "DELETE FROM `property` WHERE `property_id`='$pid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: properties.php');
		
	}

}
if(isset($_POST['rid-btn'])) //to delete a rental
{
	$rid = $_POST['rid'];

	$sql = "DELETE FROM `rentals` WHERE `rental_id`='$rid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: rentals.php');
		
	}
}
?>