{/* <script type="text/javascript">

	var answer = parseInt(Math.random() * 100);
	var tryCount;
	var maxTryCount = 5;
	var user1 = "Игрок №1";
	var user2 = "Игрок №2";
	var currentUser;

	function readInt() {
		var number = document.getElementById("userAnswer").value;
		return parseInt(number);
		// return +document.getElementById("userAnswer").value;
	}

	function begining() {
		tryCount = 0;
		user1 = document.getElementById("user1").value;
		user2 = document.getElementById("user2").value;
		maxTryCount = +document.getElementById("txtTryCount").value;
		currentUser = user1;
		hide("box1");
		hide("box3");
		show("box2");
		write(currentUser + ", введите число от 1 до 100<br>Всего попыток: " + (maxTryCount - tryCount));
	}

	function write(text) {
		if (document.getElementById("box2").style.display != "none") {
			document.getElementById("info").innerHTML = text;
		}
		if (document.getElementById("box3").style.display != "none") {
			document.getElementById("info3").innerHTML = text;
		}
	}

	function hide(id) {
			document.getElementById(id).style.display = "none";
	}

	function show(id) {
			document.getElementById(id).style.display = "block";
	}

	function guess() {
			tryCount++;
		var userAnswer = readInt();
		if (userAnswer == answer) {
			hide("box2");
			show("box3");
			write("<b>" + currentUser + ", поздравляю, вы выиграли!</b>");
		} else if (tryCount >= maxTryCount) {
			hide("box2");
			show("box3");
			write("В этой игре не налось победителей.<br>Правильный ответ: " + answer);
		} else {
			if (currentUser == user1) {
				currentUser = user2
			} else
				currentUser = user1;
			if (userAnswer > answer) {
				write("Вы ввели слишком большое число<br>" + currentUser + ", попробуйте вы. Введите число от 1 до 100<br>Попыток осталось: " + (maxTryCount - tryCount));
			} else if (userAnswer < answer) {
				write("Вы ввели слишком маленькое число<br>" + currentUser + ", попробуйте вы. Введите число от 1 до 100<br>Попыток осталось: " + (maxTryCount - tryCount));
			}

		}

	}

</script> */}