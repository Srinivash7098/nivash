<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         
         
         $dbhost = '127.0.0.1';
         $dbuser = 'srinivash';
         $dbpass = 'srinivash2023';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
         
         if($mysqli→connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli→connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         
      
         $uname = $_POST['uname'];
         $email = $_POST['email'];
         $num = $_POST['num'];
         $pass = $_POST['pass'];
         $cf = $_POST['cf']; 

       /*
         if (!empty($uname) || !empty($email) || !empty($num) || !empty($pass) || !empty($cf) )
         {

           
        }
        else{
            $SELECT = "SELECT email From
              niv Where email = ? Limit 1";
            $INSERT = "INSERT INTO niv (uname , email , num , pass , cf)
              values(?,?,?,?,?)";

              $stmt = $conn->prepare($SELECT);
              $stmt->bind_param("s", $email); 
              $stmt->execute();
              $stmt->bind_result($email);
              $stmt->store_result();
              $rnum = $stmt->num_rows; 


              if ($rnum==0) {
                $stmt→close();
                $stmt = $conn->prepare($INSERT);
                $stmt→bind_param("ssis",$uname,$email,$num, $pass,$cf);
                $stmt→execute();
                echo "New record inserted sucessfully";
               } else {
                echo "Someone already register using this email";
               }
               
              }
            else {
           echo "All field are required";
           die();
           ;
          }*/
    

          $mysqli→close() 
      ?>
   </body>
</html>
