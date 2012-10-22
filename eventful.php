<?php
	require('functions.php');

	if (!isset($_POST['submit'])){
		redirect('form.php');
	}
?>

<html>
<head>
	<title></title>
	<style>
		body{
			margin: auto;
			padding: 30px;
			border: 5px black solid;
			width:1000px;
			height: auto;
		}
		td{
			border: 1px solid black;
		}

		#num{
			width:25px;
		}

		#title{
			width:100px;
		}

		#link{
			width:100px;
		}

		#description{
			width:200px;
		}
	</style>
</head>
<body>
	<?php
		$city = urlencode($_POST['city']);
		$date = urlencode($_POST['date']);
		$key = urlencode($_POST['keyword']);

		$results = getEvent($city,$date,$key);

		echo "<table><tr><td id='num'>Item No.</td><td id='title'>Event Title</td><td id='link'>Link</td><td id='description'>Description</td><td>Owner</td></tr>";
		$i=0;
		foreach($results->events ->event as $result){
			$i=$i+1;
			$title = $result->title;
			$link = $result ->url;
			$description = $result ->description;
			$owner = $result->owner;

			echo "<tr><td id='num'><center>$i</center></td><td id='title'><center><strong>$title</strong></center></td><td id='link'><a href=$link>$link</a></td><td id='description'>$description</td><td>$owner</td></tr>";

		}

		echo "</table>";
	?>
</body>
</html>