<?php
	$filename = $_FILES["myfile"]["name"];
	$filetype = $_FILES["myfile"]["type"];
	$filesize = $_FILES["myfile"]["size"];
	$tempfile = $_FILES["myfile"]["tmp_name"];
	$filenameWithDirectory = "../../objects/school_logo.png";
?>
<html>
<head>
	<title>PHP File Uploading Script Example - codescracker</title>
</head>
<body>
<?php
	if(move_uploaded_file($tempfile, $filenameWithDirectory))
	{
		echo "<h2>File Uploaded</h2>";
		echo "<p>You file is uploaded successfully.</p>";
		echo "<p>File name = <b>$filename</b></p>";
		echo "<p>File type = <b>$filetype</b></p>";
		echo "<p>File size = <b>$filesize</b></p>";
	}
	else 
	{
		echo "Error occurred during file upload!";
    }
    
    header("location: ../settings.php");
?>
</body>
</html>