<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/stl.css">
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
			$string = "$mplic X $fact = $res";
			$numbers = array("1","2","3","4");
			$html = array(	"<span class=\"redcol\">1</span>",
							"<span class=\"greencol\">2</span>",
							"<span class=\"yellowcol\">3</span>",
							"<span class=\"bluecol\">4</span>");
			return str_replace($numbers, $html, $string);
		}
		function tableDef($border, $id){
			if (!$border){echo"<table>";}
			else {echo "<table border=\"$border\" id=\"$id\">";}
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
				
		tableDef(1, "mTable");//Тут указываем толщину рамки и ID таблицы
		tableLineDef();
		for ($i = 1; $i <= 10; $i++){//Цикл, который создает ячейки
			tableColDef();
			for ($j = 1; $j <= 10; $j++){//Цикл, который заполняет ячейки
				$globalVar = multiply($i, $j);//Умножаем, формируем и красим строку
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
			<a href="https://github.com/tka4illa/NIXeducation">GitHub Link</a>
		</footer>
	</body>
</html>