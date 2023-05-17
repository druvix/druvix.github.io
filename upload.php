<?php
if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
  $targetDir = "uploads/"; // Specify the directory to store the uploaded images
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);

  // Move the uploaded file to the target directory
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    echo "The image has been uploaded successfully.";
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}
?>