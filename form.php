<html>
<head>
	<title>Eventful Search API</title>
	<style>
	body{
		margin: auto;
		padding: 30px;
		width: 500px;
		height: 500px;
		border: 1px black solid;
	}
	label{
		width:150px;
		display: block;
		float: left;
		margin-right: 15px;
	}
	</style>
</head>
<body>
	<center> Search for events </center></br></br>
	<form action="eventful.php" method='post'>
		<label> Enter City: </label> <input type = "text" name = 'city'><br/><br/>
		<label> Enter Rage (Enter month only, ex: october): </label> <input type = 'text' name = 'date'></br><br/>
		<label> Enter Any Keywords: </label> <input type = 'text' name = 'keyword'><br/><br/>
		<center><input type = "submit" value = "Submit" name = 'submit'></center>	
	</form>
</body>
</html>

