<html>
<head>
      <title>database record</title>
      <style type="text/css">
         table{
            width:50%;
            color:black;
            font-size:25px;
            text-align:left;

         }</style></head>
    <body>
      <table>
         <tr>
            <th>name</th>
            <th>email</th>
            <th>number</th>
            <th>photo</th>
         </tr>
<?php
 $con=mysqli_connect('127.0.0.1','srinivash','srinivash2023','srinivash');
 if(!$con){
   die('connection error'.mysqli_connect_errorno());
}
$sql="SELECT nam,email,num,img_dir from niv";
$result=$con->query($sql);
if($result->num_rows>0){
   while($row=$result->fetch_assoc())
   {
      echo  "<tr><td>".$row["nam"]."</td><td>".$row["email"]."</td><td>".$row["num"]."</td><td>"."<img width='100px' height='100px' src='data:image;base64,{$row["img_dir"]}'alt='niv'>";
   }
}
$con->close();
?>
</table>
</body>
</html>
