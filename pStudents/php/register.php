 <html>
<head>
	<title>Form Validation</title>
</head>
<body>
	<script>
		function verification()
{
	var a=document.form1.input1.value;
	var b=document.form1.input2.value;
	var c=document.form1.input3.value;
	document.getElementById("id1").innerHTML="";
	document.getElementById("i1").style.border="darkcyan solid 2px";
	document.getElementById("i2").style.border="darkcyan solid 2px";
	document.getElementById("i3").style.border="darkcyan solid 2px";
	if(a==""){
		document.getElementById("id1").innerHTML="You can not leave the field blank!";
		document.getElementById("i1").style.border="red solid 2px";
		return false;
	}
	if(a.length<3){
		document.getElementById("id1").innerHTML="Username has to be atleast 3 characters long!";
		document.getElementById("i1").style.border="red solid 2px";
		return false;
	}
	if(b==""){
		document.getElementById("id1").innerHTML="Password can not be empty!";
		document.getElementById("i2").style.border="red solid 2px";
		return false;
	}
	if(b.length<5){
		document.getElementById("id1").innerHTML="Password has to be atleast 5 characters long!";
		document.getElementById("i2").style.border="red solid 2px";
		return false;
	}
	if(c!=b){
		document.getElementById("id1").innerHTML="Password does not match!";
		document.getElementById("i3").style.border="red solid 2px";
		return false;
	}
}
	</script>
	
	<form name="form1" method="post" action="../php/dbcon.php" onsubmit="return verification();">
		<div id="formm">
		Username<br>
		<input id="i1" type="text" name="input1"><br>
		Password<br>
		<input id="i2" type="password" name="input2"><br>
		Confirm Password<br>
		<input  id="i3" type="password" name="input3"><br>
		<span id="id1"></span><br>
		
		Submitted information is genuine and I am good to face any consequence if the info is wrong.<input type="checkbox" name="input5"><br>
		<button type="submit">Sign Up</button><br>
	</div>
	</form>
	

</body>
</html>