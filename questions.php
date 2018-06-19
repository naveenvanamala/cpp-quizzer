<?php include 'database.php' ?>
<?php
session_start();
//set question number
$number=$_GET['n'];

/*
*get question
*/
$query="select * from questions where qno=$number";
//get results
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$question=$result->fetch_assoc();

$query="select * from questions";
//get results
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
//total num of rows
$total=$result->num_rows;
if($number==1)
{
	$_SESSION['score']=0;
}


/*
*get choices
*/
$query="select * from choices where qno=$number";
//get results

$choices=$mysqli->query($query) or die($mysqli->error.__LINE__);
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
			 <div class="current">Questions <?php echo $question['qno'] ?> of <?php echo $total;?></div>
			 <p class="question">
			 	<?php echo $question['qsn'] ?>
			 </p>
			 <form method="post" action="process.php">
			 	<ul class="choices">
			 		<?php while($row=$choices->fetch_assoc()): ?>
			 			<li><input type="radio" name="choice" value="<?php echo $row['id'];?>"><?php echo $row['text'] ?></li>
			 		<?php endwhile; ?>
			 		
			 	</ul>
			 	<input type="submit" value="submit" >
			 	<input type="hidden" name="number" value=<?php echo $number?>>
			 </form>
		 </div>
	</main>
	<footer>
		<div class="container">
			Copyrights &copy; 2018, C++ quizer
		</div>
	</footer>
</body>
</html>