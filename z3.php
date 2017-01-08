<!DOCTYPE html>
<html>
<head>
	<title>Тест PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<header>
		<img src="logo.png">
			<ul class="gor">
		 	<li class="active"><a href="http://www.softgroup.ua">Soft Group</a></li>	
		 	<li class="active"><a href="avtor.php">Автор</a></li>	
		 	<li class="active"><a href="hello.php">Головна</a></li>
		 	</ul>
				<div class="title">
					<h1>SoftGroup</h1>
					<h2>Тестове Завдання</h2>
				</div>
		</header>
		<div class="margin">
			<div class="sidebar">
			<ul class="left">
			 	<li class="active"><a href="z1.php">Завдання 1</a></li>	
			 	<li class="active"><a href="z2.php">Завдання 2</a></li>	
			 	<li class="active"><a href="z3.php">Завдання 3</a></li>
			 	<li class="active"><a href="z4.php">Завдання 4</a></li>	
			 	<li class="active"><a href="z5.php">Завдання 5</a></li>	
			 	<li class="active"><a href="z6.php">Завдання 6</a></li>
		 	</ul>
			</div>
			<div class="content">
			<form action="" method="post">
			    Введіть числа через пробіл:<br>  <input type="text" name="item" /><br />
			    <input type="submit" name="submit" value="Обробити" />
			</form>		
<?php
$item= $_POST["item"];
$array = explode(" ",$item);
for ($i=0; $i < count($array); $i++) { echo $array[$i];}
echo "<br>";
	 $number=0;
	
	// for ($i=0; $i < count($array); $i++) { 
	// $flag=0;		
	// $n=$array[$i];
	// // перебираем возможные делители от 2 до sqrt(n)
	// for($d=2; $d<$n; $d++){ 
	// 	// если разделилось нацело, то составное
	// 	if($n%$d==0)

	// 	$flag=0;
	// 	$flag=1;		
	// 	}
	// // если нет нетривиальных делителей, то простое
	
	// if($flag==1)
	// 	$number++;
	
	// }
function isprime($n){
	if($n==1) // 1 - не простое число
		return false;
	// перебираем возможные делители от 2 до sqrt(n)
	for($d=2; $d*$d<=$n; $d++){ 
		// если разделилось нацело, то составное
		if($n%$d==0) 
			return false;
		}
	// если нет нетривиальных делителей, то простое
	return true;
	}

	for ($i=0; $i < count($array); $i++) { 

		if(isprime($array[$i]))
			$number++;

	}


 echo "Кількість простих чисел= $number";

?>
		</div>
		<div class="clear"></div>
		<footer>
			<div>Присакар Іван  ©</div>
			<div>2017</div>
		</footer>
	</div>
</body>
</html>