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
		 	<li class="active"><a href="#">Soft Group</a></li>	
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
    Имя:  <input type="text" name="item" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>

<?php

$item = $_POST["item"];//введенное предложение  
$array = explode(" ",$item);  
$max["length"] = 0;  
$max["word"] = "";  
    for($i=0;$i < count($array);$i++)  
    {  
        if(strlen($array[$i]) > $max["length"])  
        {  
        $max["word"] = $array[$i];  
        $max["length"] = strlen($array[$i]);  
        }  
    }  
echo "Первое самое длинное слово: <b>".$max["word"]."[".$max["length"]."]</b>";

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