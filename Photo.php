<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['photo'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $photo = $_FILES['photo']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($photo);

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
  } else {
    // Upload file
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
      // Save data to database
      // ...
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  // Display uploaded photo
  echo '<img src="' . $target_file . '" alt="Uploaded Photo">';
}
?>
