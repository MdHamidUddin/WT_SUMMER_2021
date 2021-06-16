<?php   include "Registration.php" ; ?>
<?php   include "Control\myphpform.php" ; ?>
<?php 

$validateradio="";
$validatecheckbox="";
/*
if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender - ".$_REQUEST["gender"];
}
*/
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validatecheckbox="";
    if(isset($_REQUEST["Dancing"]))
    {
        $v1= $_REQUEST["Dancing"];
        $validatecheckbox=$validatecheckbox.$v1;
    }
    if(isset($_REQUEST["Singing"]))
    { 
        $v2= $_REQUEST["Singing"];
        $validatecheckbox=$validatecheckbox.",".$v2;
    }
    if(isset($_REQUEST["Reading"]))
    {
     $v3= $_REQUEST["Reading"];
     $validatecheckbox=$validatecheckbox.",".$v3;
    }


if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}



$target_File="File/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
    echo "<br>".$_FILES(["fileupload"]["type"]);
    echo "<img src='".$target_File."'>";
}


}


$formdata = array(
    'Name'=> $_POST["name"],
    'Email'=> $_POST["email"],
    'Password'=>$_POST["password"],
    'Comment'=> $_POST["comment"],
    'Gender'=>"$validateradio",
    'Hobby'=>"$validatecheckbox",
    "File_Path"=>"$target_File"
   

 );


 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 //Convert updated array to JSON
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 
 //write json data into data.json file
 if(file_put_contents("data.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);


//echo "my value: ".$mydata[1]->lastName;
foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "your ".$key." is ".$value."<br>";
} 
echo "<br>";
}



?>