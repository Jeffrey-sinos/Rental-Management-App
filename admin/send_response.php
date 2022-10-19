<?php 
require_once '../config.php';
session_start();

if(isset($_SESSION['admin_id']))
{
    $admin_id = $_SESSION['admin_id'];
    $admin_type = $_SESSION['admin_type'];
}
else
{
    header("location: ../Nyumba Zetu/register/login.html");
}


$request_id = $_POST['rid'];
$response_title = $_POST['response-title'];
$response_content = $_POST['response-content'];

date_default_timezone_set("Africa/Nairobi");
$date_sent =  date('Y-m-d h:i:s');

$sq = "UPDATE `requests` SET `viewed`='yes' WHERE `request_id`='$request_id'";
$r = mysqli_query($con, $sq);

if($r)
{
	$sql = "INSERT INTO `responses`(`request_id`, `response_title`, `response_content`, `date_sent`) VALUES ('$request_id', '$response_title', '$response_content', '$date_sent')";
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		echo "Successful";
		header("location: requests.php");
		
	}
	else
	{
		echo "Error";
	}

}


?>