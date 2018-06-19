<?php include 'database.php' ?>
<?php 
	if(isset($_POST['submit']))
	{
		//get post variables;
		$question_number=$_POST['question_number'];
		$text=$_POST['question_text'];
		$choices=array();
		$choices[1]=$_POST['choice1'];
		$choices[2]=$_POST['choice2'];
		$choices[3]=$_POST['choice3'];
		$choices[4]=$_POST['choice4'];

		$correct_choice=$_POST['correct_choice'];

		//inserting qsn into questions table
		$query="insert into questions values('$question_number','$text')";
		$insert=$mysqli->query($query) or die($mysql->error.__LINE__);

		if($insert)
		{
			foreach ($choices as $choice => $value) {
				if($value != '')
				{
					if($correct_choice==$choice)
					{
						$is_correct=1;
					}
					else{
						$is_correct=0;
					}

					$query="insert into choices(qno,is_correct,text) values('$question_number','$is_correct','$value')";

					$insert=$mysqli->query($query) or die($mysqli->error.__LINE__);

					if($insert)
					{
						continue;
					}
					else{
						die('error:('.$mysqli->errno.') '.$mysqli_error);
					}
				}
			}
			$msg="question has been added";
		}

		
	}

	$query = "SELECT * FROM questions";
		//Get result
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;
		$next=$total+1;
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
			<h2>Add A Question</h1>
				<?php 
					if(isset($msg))
						echo '<p>'.$msg.'</p>';

				?>
			<form method="post" action="add.php">
				<p>
					<label>Question Number: </label>
					<input type="number" name="question_number" value="<?php echo $next; ?>" />
				</p>
				<p>
					<label>Question Text: </label>
					<input type="text" name="question_text" />
				</p>	
				<p>
					<label>Choice #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice #4: </label>
					<input type="text" name="choice4" />
				</p>
			
				<p>
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice" />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit" />
				</p>
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