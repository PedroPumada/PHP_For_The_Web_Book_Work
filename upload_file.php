<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Upload a File</title> 
</head>
<body>
<?php // Script 11.4 - upload_file.php
/* This script displays and handles an HTML form. 
This script takes a file upload and stores it on the server */

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form
    // Verify the directory is writable
    if (is_writable('../uploads/')) { // Ensure the directory is writable
        // Try to move the uploaded file:
        if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../uploads/{$_FILES['the_file']['name']}")) {
    	   print '<p>Your file has been uploaded.</p>';
        } else {
    	   print '<p style="color: red;">Your file could not be uploaded because: ';
    	   switch ($_FILES['the_file']['error']) {
    		  case 1:
    			 print 'The file exceeds the upload_max_file_size setting in php.ini';
    			 break;
    		  case 2:
    			 print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
    			 break;
    		  case 3:
    			 print 'The file was only partially uploaded';
    			 break;
    		  case 4:
    			 print 'No file was uploaded';
    			 break;
    		  case 6:
    			 print 'The temporary folder does not exist.';
    			 break;
    		  default:
    			 print 'Something unforeseen happened.';
    			 break;
    	   }
    	   print '.</p>'; // Complete the paragraph
        } // end of move_uploaded_file
    } else { // the directory is not writable
        print '<p style="color: red;">Cannot upload because the directory is not writable.</p>';
    }
} // end of submission IF

?>
<form action="upload_file.php" enctype="multipart/form-data" method="post">
    <p>Upload a file using this form:</p>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <p><input type="file" name="the_file" /></p>
    <p><input type="submit" name="submit" value="Upload this File" /></p>
</form>
</body>
</html>