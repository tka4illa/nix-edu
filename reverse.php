<html>
	<body>
		<header>
			<p>Hello, <strong>NIX<br>Education!</strong></p>
		</header>
</html>
<?php
	if(isset($_POST["word"])){
		$word = htmlentities($_POST["word"]);
		$reversedWord = strrev($word);
		echo ("<h1>$reversedWord</h1>");
		echo ("<a href=\"lesson3.html\">Назад</a>");//Если отсюда убрать - не будет доступа обратно
	}
?>
<html>
		<footer>
			Andrii Tkachuk<br>
			pro100andron4ik@gmail.com<br>
			<a href="https://github.com/tka4illa/NIXeducation">GitHub Link</a>
		</footer>
	</body>
</html>