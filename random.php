<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>seeing the power of javascript</title>
</head>
<body>
	<div>
		<form id = "target" method="post" enctype="multipart/form-data" action = "insertImg.php">
			<input type="number" id="num" name = "num" value="0">
			<input type="text" name="name" id="name" value = "@">
			<button type="submit"></button>
		</form>
		<button id="ifile" onclick="inputBtn();">create</button>
	</div>
	<script type="text/javascript">
		var numImg =0;
    function inputBtn(){
    var input=document.createElement('input');
    input.type="file";
    input.name ="img"+numImg;
    //without this next line, you'll get nuthin' on the display
    document.getElementById('target').appendChild(input);
    numImg++;
    randomString();
    document.getElementById('num').value=numImg;
    var val = document.getElementById('name').value;
    var newval = val+randomstring+"*";
    document.getElementById('name').value=newval;
}
</script>
<script type="text/javascript">
var randomstring = " ";
function randomString() {  
            //define a variable consisting alphabets in small and capital letter  
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";  
              
            //specify the length for the new string  
    var lenString = 10;  
    randomstring = '';  
  
            //loop to select a new character in each iteration  
    for (var i=0; i<lenString; i++) {  
        var rnum = Math.floor(Math.random() * characters.length);  
        randomstring += characters.substring(rnum, rnum+1);  
    }  
}  
</script> 
</body>
</html>