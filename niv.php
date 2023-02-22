<?php

if(isset($_POST('submitvalue')))
   $uname =$_POST['uname'];
   $email =$_POST['email'];
   $num   =$_POST['num'];
   $pass  =$_POST['pass'];
   $cf    =$_POST['cf'];

$con=mysqli_connect('localhost','root','','nivash');

if(!$con){
   die('connection error'.mysqli_connect_error());
}else{
echo 'success';
}
$query="INSERT INTO example(uname,email,num,pass,cf) values('$uname','$email','$num','$pass',$cf)";
$result=mysqli_query($con,$query);
if($result){
  echo  'inserted';
}
else{
   echo  'not inserted';
}
$con=mysqli_connect('localhost','root','','nivash');

if(!$con){
   die('connection error'.mysqli_connect_error());
}else{
echo 'success';
}
$query="INSERT INTO example(uname,email,num,pass,cf) values('niv','ec','1234','asds','asds')";
$result=mysqli_query($con,$query);
if($result){
  echo  'inserted';
}
else{
   echo  'not inserted';
}
?>
