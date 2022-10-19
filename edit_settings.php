<?php 
require_once 'config.php';
session_start();
if(isset($_SESSION['broker_id']))
{
	$user_id = $_SESSION['broker_id'];
	$db = "broker";
	$dbc = "broker_pic";
	$dbc1 = "broker_id";
	$name = "broker_name";
	$phone = "broker_phone_number";
	$email = "broker_email";
	$locas = "broker_location";
	$fol = "Brokers/";
}
if(isset($_SESSION['client_id']))
{
	$user_id = $_SESSION['client_id'];
	$db = "client";
	$dbc = "picture_url";
	$dbc1 = "client_id";
	$name = "client_name";
	$phone = "phone_number";
	$email = "email";
	$locas = "location";
	$fol = "clients/";

}
if(isset($_SESSION['admin_id']))
{
	$user_id = $_SESSION['admin_id'];
	$admin_type = $_SERVER['admin_type'];
	$db = "admin";
	$dbc = "admin_pic";
	$dbc1 = "admin_id";
	$name = "admin_name";
	$phone = "admin_phone";
	$email = "admin_email";
	$fol = "admins/";
}
if(isset($_SESSION['owner_id']))
{
	$user_id = $_SESSION['owner_id'];
	$db = "owner";
	$dbc = "owner_pic";
	$dbc1 = "owner_id";
	$name = "owner_name";
	$phone = "owner_phone";
	$email = "owner_email";
	$fol = "owners/";
}
//editting the profile image

if(isset($_POST['edit-pic']))
{
	echo 1;
	if(isset($_POST['file']))
	{
		echo 2;
		$file=$_FILES["file"];
		$filename = $_FILES["file"]["name"]; 
	    $fileTmpName=$_FILES["file"]["tmp_name"];
	    $fileSize=$_FILES["file"]["size"];
	    $fileError=$_FILES["file"]["error"];
	    $fileType=$_FILES["file"]["type"];

	    $fileExt= explode('.', $filename);
	    $fileActualExt=strtolower(end($fileExt));
	    $allowed=array('jpg','jpeg','png');

	    $fileNameNew=uniqid('', true).".".$fileActualExt;

	    $folder='images/'.$fol.$fileNameNew;
	    echo $folder;

	    $fileDestination='images/'.$fol.$fileNameNew;
	    move_uploaded_file($fileTmpName, $fileDestination);

	    //$sql = "UPDATE `'$db'` SET `'$dbc'`='$folder' WHERE `'$dbc1'`='$user_id'";
	    //$rs = mysqli_query($con, $sql);

	    if($rs)
	    {
	    	echo "Works";
	    }
	    else
	    {
	    	echo "Didn't Work";
	    }

	}
}

//editing the profile details
if(isset($_POST['change-data']))
{
	if(isset($_POST['new-name']) && ($_POST['new-name'] != ""))
	{
		$new_name = $_POST['new-name'];

		$sql = "UPDATE `$db` SET `$name`='$new_name' WHERE `$dbc1`='$user_id'";
		echo $sql;
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			echo "<script> alert('Update Successful!')";
			header("location: settings.php");
		}
		else
		{
			echo "<script> alert('Update Unsuccessful!')";
			header("location: settings.php");
		}
	}
	if(isset($_POST['new-phone']) && ($_POST['new-phone'] != ""))
	{
		$new_phone = $_POST['new-phone'];
		$sql = "UPDATE `$db` SET `$phone`='$new_phone' WHERE `$dbc1`='$user_id'";
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			echo "<script> alert('Update Successful!')";
			header("location: settings.php");
		}
		else
		{
			echo "<script> alert('Update Unsuccessful!')";
			header("location: settings.php");
		}
	}
	if(isset($_POST['new-email']) && ($_POST['new-email'] != ""))
	{
		$new_email = $_POST['new-email'];
		$sql = "UPDATE `$db` SET `$email`='$new_email' WHERE `$dbc1`='$user_id'";
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			echo "<script> alert('Update Successful!')";
			header("location: settings.php");
		}
		else
		{
			echo "<script> alert('Update Unsuccessful!')";
			header("location: settings.php");
		}
	}
	if(isset($_POST['new-location']) && ($_POST['new-location'] != ""))
	{
		$new_location = $_POST['new-location'];
		$sql = "UPDATE `$db` SET `$locas`='$new_location' WHERE `$dbc1`='$user_id'";
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			echo "<script> alert('Update Successful!')";
			header("location: settings.php");
		}
		else
		{
			echo "<script> alert('Update Unsuccessful!')";
			header("location: settings.php");
		}
	}
	if(isset($_POST['new-pwd']) && ($_POST['new-pwd'] != ""))
	{
		$new_pwd = $_POST['new-pwd'];
		$new_pwd1 = password_hash($new_pwd, PASSWORD_DEFAULT);
		$sql = "UPDATE `$db` SET `password`='$new_pwd1' WHERE `$dbc1`='$user_id'";
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			echo "<script> alert('Update Successful!')";
			header("location: settings.php");
		}
		else
		{
			echo "<script> alert('Update Unsuccessful!')";
			header("location: settings.php");
		}
	}
}
?>