<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
<td> <label for="Full_Name ">Full Name : </label> </td>
<td><input type="text" id="Full_Name"></td>
</tr>


<tr>
<td> <label for="Email ">Email : </label> </td>
<td><input type="text" id="Email"></td>
</tr>


<tr>
<td> <label for="Password ">Password : </label> </td>
<td><input type="password" id="Password"></td>
</tr>

<tr>
<td> <label for="Comment ">Comment : </label> </td>
<td><textarea rows="5" cols="30" name="comment" form="Comment  Here "> </textarea></td>
</tr>


<tr>
<td> <label for="Gender ">Gender : </label> </td>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</td>
</tr>

<tr>
<td> <label for="Checkbox ">Please Choose a Hobby : </label> </td>
<td>
<input type="checkbox"  name="value1" value="Singing">
<label for="value1">Singing</label>
<input type="checkbox" name="value2" value="Dancing">
<label for="value2">Dancing</label>
<input type="checkbox"  name="value3" value="Reading">
<label for="value3"> Reading</label>
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