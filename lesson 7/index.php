<html>
	<head>
		<meta charset="utf-u8">
	<head>
	<title>
		forma
	</title>
	<body>
		<form action="./form_data.php" enctype="multipart/form-data" method="post">
			  <p>Однострочный</p>
					<p><input  type="text" name="odno" maxlength="25" size="40" Value='VAs9'></p>
				<p>Многострочный</p>
					<p><textarea name="mnogostroch"></textarea></p>
				<p>Каие прдепочитаете жанры игр?</p>
					<p><input name="zadachka" type="radio" value="РПГ">РПГ</p>
					<p><input name="zadachka" type="radio" value="РТС">РТС</p>
					<p><input name="zadachka" type="radio" value="Шутер">ШУТЕР</p>
				<p>Если выбирать из двух жанров то какие?><p>
					<p><input name="a[]" type="checkbox" value="РПГ">РПГ</p>
					<p><input name="a[]" type="checkbox" value="РТС">РТС</p>
					<p><input name="a[]" type="checkbox" value="Шутер">ШУТЕР</p>
					<p><input type="file" name="f"></p>
					<p><input type="submit" value="send"</p>
			</form>
	</body>
</html>