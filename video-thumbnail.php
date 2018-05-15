<html>
	<head>
		<title>Video Thumbnail</title>
	</head>
	<body>
		<form name="form" enctype="multipart/form-data" method="post">
			<input type="file" name="video">
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>
<?php
/*
	download ffmpeg from -> ffmpeg.zeranoe.com/builds
	Commands:-
	-i input file name
	-an Disable Audio
	-ss Get image from X seconds in video
	-s Soze of the image
*/

	if(isset($_POST['submit'])){
		$ffmpeg = "c:\\ffmpeg\\bin\\ffmpeg";
		$videoFile = $_FILES['video']['tmp_name'];
		$imageFile = "videothumb.jpg";
		$size = "150X100";
		$getFromSecond = 5;
		$cmd = "$ffmpeg -i $videoFile -an -ss $getFromSecond -s $size $imageFile";
		if(!shell_exec($cmd)){
			echo "Thumbnail created successfully";
		}else{
			echo "Error in creating thumbnail";
		}
	}
?>