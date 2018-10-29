<?php

	$conn = mysqli_connect("localhost","andreas","andreas","NTUsurveyForm");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$course = $_POST['course'];
	$origin = $_POST['origin'];
	$high_school = $_POST['high_school'];
	$PINTU_Event = $_POST['PINTU_Event'];
	$comment = $_POST['comment'];


	if(!$conn)
		die(mysqli_connect_error());
	else{
		if(isset($_POST['submit'])){
				$query = "INSERT into identity (name	,email	,age	,course	,origin	,high_school	,PINTU_Event,comment) values('$name'	,'$email',	'$age',	'$course',	'$origin'	,'$high_school',	'$PINTU_Event','$comment') ";

				if(mysqli_query($conn,$query)){
                    header('location:afterSubmit.html');
				}
				else{
					echo 'error happen!!!!!!';
                    echo 'please fill the form again!';
				}
		}
	}
	mysqli_close($conn);
?>
