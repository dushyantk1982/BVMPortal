<?php
//$target_dir = "uploads/";
//$target_dir = "../student/notice/";
//$target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
//$uploadOk=1;

// Check if file already exists
//if (file_exists($target_dir . $_FILES["uploadFile"]["name"])) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}

// Check file size
//if ($uploadFile_size > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}

// Only GIF files allowed 
//if (!($uploadFile_type == "image/gif")) {
//  echo "Sorry, only GIF files are allowed.";
//    $uploadOk = 0;
//}

//File Uploading in DataBase
// Check if a file has been uploaded
//if(isset($_FILES['uploadFile'])) {
    // Make sure the file was sent without errors
    //if($_FILES['uploadFile']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('localhost', 'bvmgroup_userbvm', 'dushyant12428', 'bvmgroup_bvmclg');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        /*$name = $dbLink->real_escape_string($_FILES['uploadFile']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploadFile']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploadFile']['tmp_name']));
        $size = intval($_FILES['uploadFile']['size']);*/
 		$message=$_POST['message'];
		$name=$_POST['uploadLink'];
		$mime='Message';
		$data='Blank';
		$size='1';
		$year=$_POST['year'];
		$date=$_POST['date'];
		$dept=$_POST['dept'];
        // Create the SQL query
        $query = "
            INSERT INTO `notice` (
                `message`,`name`, `mime`, `size`, `data`, `created`, `batch`, `dept`
            )
            VALUES (
                '{$message}','{$name}', '{$mime}', {$size}, '{$data}', '{$date}', '{$year}', '{$dept}'
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
       // if($result) {
//            $uploadDBOk=1;
//
//			//echo 'Success! Your file was successfully added!';
//        }
        //else {
//		$uploadDBOk=0;
//            //echo 'Error! Failed to insert the file'."<pre>{$dbLink->error}</pre>";
//        }
    //}
    //else {
//        echo 'An error accured while the file was being uploaded. '
//           . 'Error code: '. intval($_FILES['uploadFile']['error']);
//    }
 
    // Close the mysql connection
   // $dbLink->close();
//}
//else {
//    echo 'Error! A file was not sent!';
//	
//}
 





// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0 or $uploadDBOk==0) {
  //  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
//} else { 
 //   if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
  //      echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
   // } else {
    //    echo "Sorry, there was an error uploading your file.";
    //}
//}


// Echo a link back to the main page
//echo '<p>Click <a href="uploadnotice.htm" target="_parent">here</a> to go back</p>';

?>
