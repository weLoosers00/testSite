<?php

	$con = mysqli_connect('localhost', 'root');
	mysqli_select_db($con, 'exam');
	$teacher_id = "9569505582ghT67";
	date_default_timezone_set("Asia/Calcutta");
	$date = date("Y.m.d");
	$time = date("h.i.sa");
	$test_id = "9569505582aac56".$date.$time;
	$name = $_POST['tname'];
	$target = $_POST['ttarget'];
	$subject = $_POST['tsubject'];
	$type = $_POST['ttype'];
	$duration = $_POST['tduration'];
	$nsub = $_POST['tnsub'];
	$per_subject_question = "*";
	for($i=0; $i<$nsub; $i++){
		$per_subject_question = $per_subject_question . "0*";
	}
	$sql= "INSERT INTO paper (teacher_id, test_id, name_of_test, type, target, number_of_subjects, name_of_subjects, total_question, per_subject_question, question, duration) VALUES ('$teacher_id', '$test_id', '$name', '$type', '$target', '$nsub', '$subject',0, '$per_subject_question', '@', '$duration')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "1".$test_id;
	}



?>