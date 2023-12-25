<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$EmailAddress=$_REQUEST['emailaddress'];

$host="localhost";
$user="root";
$password="";
$db="bis_level_four";

@$conn = mysqli_connect($host,$user,$password,$db);

$insert="insert into studentsbisinfo values('$firstname',$secondname,'$emailaddress',)";
mysqli_query($conn,$insert);

if($conn){
    echo("<h1 style ='color: green;'> your Registration is Done!</h1");
}
else{
    echo("<h1 style ='color: green;'> your Registration is Failed!</h1");
}



?>