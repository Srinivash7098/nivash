<html>
<body>
<?php
  if(isset($_POST['submit']))
  {
    $name  = $_POST['nam'];
    $email = $_POST['email'];
    $num   = $_POST['num'];
    $pass  = $_POST['pass'];
    $cf    = $_POST['cf'];
    $number = count($_POST["num"]);

// adding Single image to database

    if(getimagesize($_FILES['img_dir']['tmp_name'])==false)
    {
      echo "select image";
    }
    else
      {
         $image=$_FILES['img_dir']['tmp_name'];
         $nam=$_FILES['img_dir']['name'];

         $image=file_get_contents($image);
         $image=base64_encode($image);
      }


      $target_dir = "uploads/";



    //Adding multiple image file


      $countfiles = count($_FILES['file']['name']);

      for($i=0;$i<$countfiles;$i++){
  
          
          $filename = $_FILES['file']['name'][$i];
  
          
          $tempname = $_FILES['file']['tmp_name'][$i];
          $tempname=file_get_contents( $tempname);
          $tempname=base64_encode( $tempname);
  
          $target_file = $target_dir . basename($filename);
  
          move_uploaded_file($tempname, $target_file);
     
          //Adding multiple number

	          for($i=0; $i<$number; $i++)
	         {
		      
          $conn = mysqli_connect('127.0.0.1','srinivash','srinivash2023','srinivash');
          $query = "INSERT INTO niv(nam,email,pass,cf,img_dir,multiple,num) VALUES ( '$name','$email','$pass','$cf','$image','$tempname','".($_POST["num"][$i])."')";
        $r=mysqli_query($conn, $query);
          mysqli_close($conn);
             
        }} 
    if($r){
      echo "added";
    }
    else{
      echo" not added";
    }
   }
    
?>

  </html>
  
