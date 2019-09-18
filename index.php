<?php
include 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Узнать курс доллара</title>
</head>
<body>
	<?if(!$_GET):?>
		<form>
			<p>Выберите дату: 
				<input type="date" name="date">
				<input type="submit"  value="Отправить">
			</p>
		</form>
	<?else:?>
		<p><?=getCurs()?></p>
		<a href="<?=$_SERVER['PHP_SELF']?>">Узнать курс за другой день</a>
	<?endif;?>
</body>
</html>