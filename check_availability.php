<?php
require_once("includes/config.php");
//For Email
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : Anda tidak memasukkan e-mel yang sah.";
	}
	else {
		$result ="SELECT count(*) FROM userRegistration WHERE email=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$email);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> E-mel sudah ada. Sila cuba lagi.</span>";
}
}
}
// For Registration Number
if(!empty($_POST["regno"])) {
	$regno= $_POST["regno"];

		$result ="SELECT count(*) FROM userRegistration WHERE regNo=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$regno);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Nombor pendaftaran sudah ada. Sila cuba lagi .</span>";
}

}


// For old Password
if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM userregistration WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) 
echo "<span style='color:green'> Password dipadankan .</span>";
else echo "<span style='color:red'> Password tidak dipadankan .</span>";
}

// For room availbilty
if(!empty($_POST["roomno"])) 
{
$roomno=$_POST["roomno"];
$result ="SELECT count(*) FROM registration WHERE roomno=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$roomno);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>$count Tempat duduk sudah penuh.</span>";
else
	echo "<span style='color:red'>Semua Tempat Duduk Terdapat</span>";
}
?>