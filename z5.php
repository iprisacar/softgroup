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
			<ul>
		 	<li><a href="http://www.softgroup.ua">Soft Group</a></li>	
		 	<li><a href="avtor.php">Автор</a></li>	
		 	<li><a href="index.php">Головна</a></li>
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
			<?php
				$item = $_POST["item"];//введенное предложение  
				$array = explode(" ",$item);
				//preg_match_all('/([a-zA-Zа-яА-Я]+)/',$item,$array);
				$array_numeric[0]=1;
				for($i=1;$i < count($array);$i++){
					$array_numeric[$i]=0;
				}
				for($i=1;$i < count($array);$i++){
					for($x=$i;$x>=0;--$x){
						if ($array[$i]==$array[$x]) {
							$array_numeric[$i]++;
						}
				  	}
				} 
			?>
			<form action="" method="post">
			<textarea  name="item"></textarea>
			<textarea  name="cout"><?php
				 for($i=0;$i < count($array);$i++) {
					echo $array_numeric[$i]-1;
					echo " ";
				 } 
				 ?>
			</textarea>
			 <br><input type="submit" name="submit" value="Обробити" />
			 </form>
		</div>
		<div class="clear"></div>
		<footer>
			<div>Присакар Іван  ©</div>
			<div>2017</div>
		</footer>
	</div>
</body>
</html>