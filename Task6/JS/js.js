function get(id){
  return document.getElementById(id);
}

function validateGen(){
  var gn = document.getElementsByName("gender");
  var checked = false;
  for(var i=0;i<gn.length;i++){
      if(gn[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}
function validateHobby(){
  var hobb = document.getElementsByName("hobbies[]");
  var checked = false;
  for(var i=0;i<hobb.length;i++){
      if(hobb[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}


function validateForm() {
  var Name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  
  if (Name == "" ) {
   document.getElementById("errorname").innerHTML="Please fill out name";
    //return false;
  }
  else{
    document.getElementById("errorname").innerHTML="";
  }

  if(!res)
  {
    document.getElementById("errormail").innerHTML="Email format is not correct";
    //return false; 
  }
  else
  {
    document.getElementById("errormail").innerHTML="";
  }

 if (password.length<6) 
 {
   document.getElementById("errorpass").innerHTML="Password contains 6 char";
   // return false;
  }
  else 
  {
    document.getElementById("errorpass").innerHTML="";
  }

  if (comment.length<15) {
    document.getElementById("errorcomment").innerHTML="Comment contains 15 char";
    // return false;
   }
   else 
   {
    document.getElementById("errorcomment").innerHTML="";
   }

   if(validateGen()==false)
   {
     document.getElementById("errorgen").innerHTML="Gender must requried";
    // return false;
   }
   else{
    document.getElementById("errorgen").innerHTML="";
   }

   if(!get("Singing").checked && !get("Dancing").checked && !get("Reading").checked){
    hasError=true;
    document.getElementById("errorhobby").innerHTML="At Least One Hobby must requried";
    return false;
}

else 
{
  document.getElementById("errorhobby").innerHTML=" ";
}


}




