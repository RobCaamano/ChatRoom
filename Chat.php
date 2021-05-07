<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> Chat </title>
		<meta charset = "utf-8" />
	</head>
	
					
	<!JAVASCRIPT>
	<script>
	function onMessageChange() {
		
		var username = document.getElementById("name1").value;
		var password = document.getElementById("password").value;
		var textBox = document.getElementById("textBox").value;

		//XMLHttpRequest

		var xhttp = new XMLHttpRequest();
			
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("error").innerHTML = this.responseText;
			}
		};

		xhttp.open("GET", "sendmessage.php?username=" + username + "&password=" + password + "&textBox=" + textBox, true);
		console.log(username+password+textBox);
		xhttp.send();
	}

	function waittime(){
		setInterval(name2, 1000);
	}

	function name2(){
		var name2 = document.getElementById("name2").value;
		
		//XMLHttpRequest
	
		var xhttp = new XMLHttpRequest();
			
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("textBox2").innerHTML = this.responseText;
							}
		};

		xhttp.open("GET", "retrievemessage.php?name2=" + name2, true);
		xhttp.send();

	}

	</script>

	<body>
		<style>
			body {
 				background-color: #adad85;
				font-family: "Georgia", serif;
			}

			input[type=submit]:hover{
				background-color: #f44336;
				color: black;
			}

			input[type=text], select {
				width: 60%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			#textBox{
				height: 200px;
				width: 60%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			#textBox2{
				height: 200px;
				width: 60%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			#listen{
				background-color: #3e3e28;
				border: none;
				color: white;
				padding: 10px 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}

		</style>

		<h1>Chat Room!</h1>

		<div>
			<label for='name1'>Enter your name:</label><br>
			<input type='text' id='name1' name='name1'><br>
			<p></p>
			<label for='password'>Enter your password:</label><br>
			<input type='text' id='password' name='password'><br>
			<p></p>
			<label for='textBox'>Chat:</label><br>
			<input type='text' id='textBox' name='textBox' onkeyup="onMessageChange()"><br>
			<p></p>
		</div>
		

		<div class='updateErrors'>
			<span class='error' id = error>
		</div>
			
	
		<div>
        <label>Enter valid name:</label>
        <input type="text" name="name2" id="name2" onkeyup="waittime()"> <br>
        <label>Chat:</label> <br>
        <textarea disabled="true" name="textBox2" id="textBox2" readonly="true"></textarea> <br>
	
    	</div>		
	
	</body>
</html>