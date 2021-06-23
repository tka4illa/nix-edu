<html>
<head>
	<meta charset="utf-8" /> 
</head>
<body>
	<header>
		<p>Hello, <strong>NIX<br>Education!</strong></p>
	</header>
		<nav style:
			display: inline;>
			<a href= "lesson1.php">Lesson #1</a>
			<a href= "lesson2.php">Lesson #2</a>
			<a href= "lesson3.html">Lesson #3</a>
		</nav>
	<main>
</html>
	<?php
		function multiply($mplic, $fact){
			$res = $mplic * $fact;
			return "$mplic X $fact = $res";
		}
		
		function tableDef($border){
			if (!$border){echo"<table>";}
			else {echo "<table border=\"$border\">";}
		}
		function tableClose(){
			echo '</table>';
		}
		function tableLineDef(){
			echo '<tr>';
		}
		function tableLineClose(){
			echo '</tr>';
		}
		function tableColDef(){
			echo '<td>';
		}
		function tableColClose(){
			echo '</td>';
		}
		function newCell(){
			echo '<tr><td>';
		}
		function endCell(){
			echo '</tr></td>';
		}
		tableDef(1);
		tableLineDef();
		for ($i = 1; $i <= 10; $i++){//Цикл, который создает ячейки
			tableColDef();
			for ($j = 1; $j <= 10; $j++){//Цикл, который заполняет ячейки
				$globalVar = multiply($i, $j);//Умножаем и формируем строку
				if($j == 10){
					echo "$globalVar <br>";
					}
				else {
					echo "$globalVar <br>";
				}
			}
			tableColClose();
		}
		tableColClose();
		tableClose();
		
		?>
<html>
			</main>
		<footer>
			Andrii Tkachuk<br>
			pro100andron4ik@gmail.com<br>
			<a href="https://github.com/tka4illa/nix-edu">GitHub Link</a>
		</footer>
	</body>
</html>