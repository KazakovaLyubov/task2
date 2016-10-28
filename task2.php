<html>
	<body>
		<form action="task2.php" method="GET">
			<p class="title" align="center">Вычисление биссектрисы треугольника по длине трех сторон</p><br>
			<img src="http://planetcalc.ru/users/2/1271080992.JPG" width="300" height="250">
			<img src="http://planetcalc.ru/cgi-bin/mimetex.cgi?L=\frac{\sqrt{ab(a+b+c)(a+b-c)}}{a+b}" width="300" height="50"><br>
			<font size="5" color="red" face="Arial">Вершины треугольника обычно обозначают заглавными буквами A, B, C, а строчными буквами a, b, c - длины противоположных сторон. Т.е. сторона AB - c, AC - b, BC - a. 
		Формула длины биссектрисы L угла при вершине C:</font>
			
			<p>Сторона AB: <input type="text" name="arg1" value="<?
			if (isset ($_GET['arg1'])) {
					echo htmlspecialchars($_GET['arg1']);
				}
			?>">
			<p>Сторона BC: <input type="text" name="arg2" value="<?
			if (isset ($_GET['arg2'])) {
					echo htmlspecialchars($_GET['arg2']);
				}
			?>">
			<p>Сторона AC: <input type="text" name="arg3" value="<?
				if (isset ($_GET['arg3'])) {
					echo htmlspecialchars($_GET['arg3']);
				}
				?>">
			<input type="submit" value="Вычислить" name="add">
		</form>
		<?php 		 	
		 if (isset($_GET['arg1']) && isset ($_GET['arg2']) && isset ($_GET['arg3'])) {
			if (is_numeric($_GET['arg1'])&& is_numeric($_GET['arg2']) && is_numeric($_GET['arg3'])) {
				if (($_GET['arg1'])>0 && ($_GET['arg2'])>0 && ($_GET['arg3'])>0) {
					if((($_GET['arg1'])+($_GET['arg2']))>($_GET)){
						$L=(sqrt($_GET['arg1']*$_GET['arg2']*($_GET['arg1']+$_GET['arg2']+$_GET['arg3'])*($_GET['arg1']+$_GET['arg2']-$_GET['arg3'])))/($_GET['arg1']+$_GET['arg2']);
						echo  "Результат: ". number_format ($L, 2, ',', ' ');
					}
					else{
						echo "Ошибка! Слишком большое значение длины стороны AC "
					}
				else {
					echo "Ошибка! Введено отрицательное или нулевое значение";
				}
				echo "<br>";
			}
			else {
				echo "Ошибка! Введено не числовое значение";
				echo "<br>";
			}
			}
		 }
		?>
	
		<style type="text/css">
			.left-img{
				margin-left:10px;			
				
			}
			.middle-text{
				margin-left:10px;			
				float:left;
			}
			.right-img{
				margin-left:10px;
				float:left
			}
			.title{
				color:midnightblue;
				font-family: ARIAL BLACK;
				font-weight: bold;
				font-size:30px;
			}
	</body>
</html>