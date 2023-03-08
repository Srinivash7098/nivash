<html>
<head>
      <title>database record</title>
      <style type="text/css">
         body{
         
            background:rgba(233,76,161,0.6);
         }
         table{
            width:30%;
            color:black;
            font-size:20px;
            text-align:left;
            position:relative;
            left:20%;
            background:#fafafa;
            text-align:center;
           
         }
         th,td{
            padding:5px 50px;
         }
         th{
            background:#ba68c8;
            color:#fafafa;
            text-transform:uppercase;
         }
         tr:nth-child(odd){
            background-color:#eeeeee;
         }
         img{
            border-radius:100%;
         }
         </style></head>
    <body>
      <table>
         <tr>
            <th>name</th>
            <th>email</th>
            <th>number</th>
            <th>photo</th>
            <th>photo</th>
         </tr>
<?php
 $con=mysqli_connect('127.0.0.1','srinivash','srinivash2023','srinivash');
 if(!$con){
   die('connection error'.mysqli_connect_errorno());
}
?>

<?php
$sql="SELECT * FROM niv";
$result=$con->query($sql);
if($result->num_rows>0){
   while($row=$result->fetch_array(MYSQLI_BOTH))
   {
      
      echo  "<tr><td>".$row["nam"]."</td><td>"
      .$row["email"]."</td><td>"
      .$row["num"]."</td><td>"
      ."<img width='50px' height='50px' src='data:image;base64,{$row["img_dir"]}'alt='niv'>"."</td><td>"
      ."<img width='50px' height='50px' src='data:image;base64,{$row["multiple"]}'alt='niv'>"."</td>"; 
   }
}
?>
