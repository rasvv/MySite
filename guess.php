<!DOCTYPE html>
<html>
	<?php
		include "head.php"
	?>

	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount;
		var maxTryCount = 5;
		var user1 = "Игрок №1";
		var user2 = "Игрок №2";
		var currentUser;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function begining(){
			tryCount = 0;
			user1 = document.getElementById("user1").value;
			user2 = document.getElementById("user2").value;
			maxTryCount = +document.getElementById("txtTryCount").value;
			currentUser = user1;
			hide("box1");
			hide("box3");
			show("box2");
			write(currentUser +", введите число от 1 до 100<br>Всего попыток: "+ (maxTryCount-tryCount));
		}

		function write(text){
			if(document.getElementById("box2").style.display != "none"){
				document.getElementById("info").innerHTML = text;
			}
			if(document.getElementById("box3").style.display != "none"){
				document.getElementById("info3").innerHTML = text;
			}
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function show(id){
			document.getElementById(id).style.display = "block";
		}

		function guess(){
			tryCount++;
			var userAnswer = readInt();
			if(userAnswer == answer){
				hide("box2");
				show("box3");
				write("<b>"+currentUser+", поздравляю, вы выиграли!</b>");
			} else if(tryCount >= maxTryCount){
				hide("box2");
				show("box3");
				write("В этой игре не налось победителей.<br>Правильный ответ: " + answer);
			} else {
				if(currentUser == user1) {
				currentUser = user2
			} else 
				currentUser = user1;
				if(userAnswer > answer){
					write("Вы ввели слишком большое число<br>"+currentUser+", попробуйте вы. Введите число от 1 до 100<br>Попыток осталось: " + (maxTryCount-tryCount));
				} else if(userAnswer < answer){
					write("Вы ввели слишком маленькое число<br>"+currentUser+", попробуйте вы. Введите число от 1 до 100<br>Попыток осталось: " + (maxTryCount-tryCount));				
				}

			}
			
		}

	</script>

<body>
	<?php
		include "menu.php"
	?>
	<section class="main">
		<h1>Игра "Угадай число"</h1>

		<main>
			<div class="box" id="box1">
				<p id="infoPrompt">Давайте сначала познакомимся</p>
				<p id="infouser1">Игрок №1 представьтесь</p>
				<input type="text" id="user1">

				<p id="infouser2">Игрок №2 представьтесь</p>
				<input type="text" id="user2">

				<p id="infotxtTryCount">Введите количество попыток</p>
				<input type="text" id="txtTryCount">
				<br>
				
				<a href="#" onClick="begining();" id="buttonBeg">Начать</a>		
			</div>
			<div class="box" id="box2">
				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Проверить</a>				
			</div>
			<div class="box" id="box3">
				<p id="info3">Угадайте число от 0 до 100</p>
				<a href="#" onClick="begining();" id="button">Еще раз</a>				
			</div>
		</main>
	</section>

	<?php
		include "footer.php"
	?>
</body>
</html>