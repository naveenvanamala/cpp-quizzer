<?php include "header.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<body>
	<header>
		<div class="container">
			<h1>C++ quiz</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
				<p>Congrats! You have completed the test</p>
				<p>Final Score: <?php echo $_SESSION['score']?></p>
				<a href="questions.php?n=1" class="start">Take Again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2014, PHP Quizzer
		</div>
	</footer>
</body>
</html>