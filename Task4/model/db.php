<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND username='". $username."'");
    return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//$conobj,"student",$username,$firstname,$email,$address,$dob,$password,$gender,$validatecheckbox,$prof
 function UpdateUser($conn,$table,$username,$firstname,$email,$address,$dob,$password,$gender,$validatecheckbox,$prof)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email',address='$address',dob='$dob',password='$password',gender='$gender',interests='$validatecheckbox',profession='$prof' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>