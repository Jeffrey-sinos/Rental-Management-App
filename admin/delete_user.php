<?php 	
require_once '../config.php';
session_start();

if(isset($_POST['aid-btn'])) //to delete a admin
{
	$aid = $_POST['aid'];
	echo $aid;

	$sql = "DELETE FROM `admin` WHERE `admin_id`='$aid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: admins.php');
		
	}

}

if(isset($_POST['bid-btn'])) //to delete a broker
{
	$bid = $_POST['bid'];

	$sql = "DELETE FROM `broker` WHERE `broker_id`='$bid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: brokers.php');
		
	}}

if(isset($_POST['tid-btn'])) //to delete a tenant
{
	$tid = $_POST['tid'];
	echo $tid;

	$sql = "DELETE FROM `client` WHERE `client_id`='$tid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: tenants.php');
		
	}
}

if(isset($_POST['oid-btn'])) //to delete a owner
{
	$oid = $_POST['oid'];

	$sql = "DELETE FROM `owner` WHERE `owner_id`='$oid'";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		
		header('location: owners.php');
		
	}
}

?>