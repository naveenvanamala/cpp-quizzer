<?php include 'database.php' ?>
<?php
$query="select * from questions";
//get results

$result=$mysqli->query($query) or die($mysqli->error.__LINE__);

$total=$result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>C++ Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>C++ Quiz</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Test your C++ skills</h2>
			<p>This is a multiple choice quiz to test ur knowledge</p>
			<ul>
				<li><strong>Number Of Question: </strong><?php echo $total ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php  echo $total/2?> minutes</li>
			</ul>
			<a href="questions.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyrights &copy; 2018, C++ quizer
		</div>
	</footer>
</body>
</html>