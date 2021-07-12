<?php

session_start(); 
include "..\control\SearchUser.php";
include('../control/updatecheck.php');



if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>




<!DOCTYPE html>
<html>
<body>


<h2>Profile Page</h2>

<br><br>
<?php
$User="";
$username="";
$radio1=$radio2=$radio3=$password=$address=$dob=$Prof1=$Prof2=$Prof3=$Prof4=$I1=$I2=$I3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();
//

//$searchQuery=$connection->searc
if(isset($_POST['Search']))
{
  $User=$_REQUEST['username'];
  $userQuery=$connection->Search($conobj,"student",$User);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $password=$row["password"];
      $address=$row["address"];
      $username=$row["username"];
      $email=$row["email"];
      $dob=$row["dob"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

      if($row["profession"]=="Academician")
      {
        $Prof1="selected";
      }
      if($row["profession"]=="student")
      {
        $Prof2="selected";
      }
      if($row["profession"]=="Business")
      {
        $Prof3="selected";
      }
      if($row["profession"]=="Stuff")
      {
        $Prof4="selected";
      }

      if($row["interests"]=="music")
      {
        $I1="checked";
      }
      if($row["interests"]=="sports")
      {
        $I2="checked";
      }
      if($row["interests"]=="reading")
      {
        $I3="checked";
      }
    $dob=$row["dob"];


  } 
}
  else {
    echo "0 results";
  }
}






?>
<form action='' method='post'>


<input type='hidden' name='username' value="<?php echo $username; ?>" >
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" ><br><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
Address: <textarea rows="5" cols="30" name="address"> <?php echo $address; ?> </textarea><br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other <br><br>


Profession: 
<select name="profession" >
<option > </option>
<optgroup label="Profession">
	  <option value="Academician" <?php echo $Prof1; ?>>Academician</option>
    <option value="student"<?php echo $Prof2; ?>>Student</option>
    <option value="Business" <?php echo $Prof3; ?>>Business</option>
    <option value="Stuff" <?php echo $Prof4; ?>>Stuff</option>   
    </select><br><br>

Interest : 

<input type="checkbox"  name="music" value="music" <?php echo $I1;?>> music
<input type="checkbox" name="sports" value="sports"<?php echo $I2;?>>sports
<input type="checkbox" name="reading" value="reading"<?php echo $I3;?>>reading <br><br>

DOB</td>
 <input type="date" name="dob" value="<?php echo $dob; ?>" >


     <input name='update' type='submit' value='Update'>  <br><br>

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>