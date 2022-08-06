<?php
$num_ques = 0;
$addAfter = 1;
$initial = "asd f fvcd *frggf 8fdtr 3 def*";
$question = "Kundan yadav*";
$final_question;
if($num_ques==0){
	$final_question = $question;
}else{
	$final_question = $initial[0];
	$position = 0;
	$flag = 1;
	for($i=1; $i<strlen($initial); $i++){
		if($initial[$i]=="*"){
			$position++;
		}
		$final_question = $final_question.$initial[$i];
		if($position==$addAfter){
			if($flag == 1){
			$final_question = $final_question.$question;
			$flag=0;
		}
		}
	}
}
echo $final_question;
?>