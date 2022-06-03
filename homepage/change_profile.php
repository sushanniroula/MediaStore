<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';
session_start();
$email=$_SESSION["emailid"];
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["change"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (email, file_name, uploaded_on) VALUES ('".$email."','".$fileName."', NOW())");
            if($insert){
				$db->query("UPDATE `images` SET `status` = '0' WHERE `images`.`status` = '1' AND `images`.`email`='".$email."';");
				$db->query("UPDATE `images` SET `status` = '1' WHERE `images`.`file_name` = '".$fileName."' AND `images`.`email`='".$email."';");
                $statusMsg = "Your profile has been successfully changed.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a picture to upload.';
}

// Display status message
echo $statusMsg;
header("refresh:2; url=main.php");
?>