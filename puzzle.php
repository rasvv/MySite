<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>
	<?php
		include "menu.php"
	?>

	<h1>Игра в загадки</h1>

	<main>
		<div class="box">

			<?php 
				$score = 0;
				if (isset($_GET["userAnswer1"]) &&	isset($_GET["userAnswer2"]) &&
					isset($_GET["userAnswer3"]) &&	isset($_GET["userAnswer4"])){
					$userAnswer = $_GET["userAnswer1"];
					if($userAnswer = "месяц"){
						$score++;
					}
					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer = "веретено"){
						$score++;
					}
					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer = "гусь" || $userAnswer = "лебедь" || $userAnswer = "Гусь" || $userAnswer = "Лебедь" ){
						$score++;
					}
					$userAnswer = $_GET["userAnswer4"];
					if($userAnswer = "еж" || $userAnswer = "ёж" || $userAnswer = "Еж" || $userAnswer = "Ёж"){
						$score++;
					}
					echo "Вы угадали ".score." загадок";
				}
			?>
			<form method="GET">
				<p id="answer1">Над бабкиной избушкой висит хлеба краюшка.</p>
				<input type="text" name="userAnswer1">
				
				<p id="answer2">Чем больше верчусь, кручусь, тем больше толстею.</p>
				<input type="text" name="userAnswer2">

				<p id="answer3">Бел, как снег, надут, как мех, на лопатах ходит.</p>
				<input type="text" name="userAnswer3">

				<p id="answer4">Не портной, одежду никому не шью, а всю жизнь с иголками хожу.</p>
				<input type="text" name="userAnswer4">

				<br>
				<input type="submit" value="Ответить" name="">
				<br>
				<input type="submit" value="Показать ответы" name="">
			</form>
		</div>
	</main>

	<?php
		include "footer.php"
	?>
</body>
</html>