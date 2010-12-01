<?php
include ("header.php");

echo $form = "<h2>Upload your file</h2>
<form enctype=multipart/form-data action=uploader.php method=POST>
<input type=hidden name=MAX_FILE_SIZE value=100000 />
Choose a file to upload: <input name=uploadedfile type=file /><br />
<input type=submit value=Upload File />
</form>
";

$target_path = "uploads/"; 
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 


?>
