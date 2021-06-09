<?php   include "Control\myphpform.php" ; ?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form action="" method="post">
<tr>
<td> Full Name : </td>
<td><input type="text" name="name"> <?php echo $Name; ?> </td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" name="email"> <?php echo $validateemail; ?> </td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" name="password"><?php echo $validatepassword; ?></td>
</tr>

<tr>
<td>Comment :</td>
<td><textarea rows="5" cols="30" name="comment"></textarea> <?php echo $validatecomment; ?></td>
</tr>


<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <br> <?php echo $validateradio; ?><br>
</td>
</tr>

<tr>
<td> Please Choose a Hobby :</td>
<td>

<input type="checkbox"  name="Singing" value="Singing"> Singing
<input type="checkbox" name="Dancing" value="Dancing">Dancing
<input type="checkbox" name="Reading" value="Reading">Reading <br> <?php echo $validatecheckbox; ?>

</td>
</tr>



<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
</tr>


</form>


</table>

</body>
</html>