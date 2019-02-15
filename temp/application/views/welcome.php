<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестовое задание</title>
</head>
<body>
	<form enctype="multipart/form-data" method="post">
		<p>Строка которую будем искать</p><input type="text" name="str"><br><br>
		<p>Путь к файлу</p><input type="text" name="put"><br><br>
		<p>Файл в ктором будем искать</p><p><input type="file" name="uploadFile"><br><br>
		<input type="submit" value="Отправить" name="upload"></p>
	</form> 

	<div class="result">
		<?php echo $result; ?>
	</div>
</body>
</html>