<?php   include "..\Control\myphpform.php" ; ?>

<!DOCTYPE html>
<html>
<head>
<script src="..\js\js.js"></script>
<title>Registration Form </title>

</head>
<body>



<table>
<h1>Registration Form</h1>
<form action="" onsubmit="return validateForm()" method="post">
<tr>
<td> Full Name : </td>
<td><input type="text" id="name" name="name" > <?php echo $Name; ?> </td> <td> <p id="errorname"></p></td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" id="email" name="email"> <?php echo $validateemail; ?> </td> <td> <p id="errormail"></p></td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" id="password" name="password"><?php echo $validatepassword; ?></td> <td> <p id="errorpass"></p></td>
</tr>

<tr>
<td>Comment :</td>
<td><textarea rows="5" cols="30" id="comment" name="comment"></textarea> <?php echo $validatecomment; ?></td><td> <p id="errorcomment"></p></td>
</tr>


<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" id="gender" value="Male"> Male 
<input type="radio" name="gender" id="gender" value="Female"> Female 
<input type="radio"  name="gender"  id="gender" value="Other"> Other <br> <?php echo $validateradio; ?><br> <td> <p id="errorgen"></p></td>
</td>
</tr>

<tr>
<td> Please Choose a Hobby :</td>
<td>

<input type="checkbox"  name="Singing" id="Singing" value="Singing"> Singing
<input type="checkbox" name="Dancing" id="Dancing" value="Dancing">Dancing
<input type="checkbox" name="Reading"  id="Reading" value="Reading">Reading <br> <?php echo $validatecheckbox; ?>  <td> <p id="errorhobby"></p></td>

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