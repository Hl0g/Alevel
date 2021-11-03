<html>
	<head>
		<meta charset="utf-u8">
	<head>
	<title>
		forma
	</title>
	<body>
		<div class="form-row align-items-center m-3">
			<div class="col">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				<form action="./form_data.php" enctype="multipart/form-data" method="post">
					<div class="m-1">
						Имя
					</div>
					<input  class="form-control"  type="text" placeholder=".form-control-lg" name="odno" maxlength="25" size="40" Value='VAs9'>
					<div class="m-1">
						О себе
					</div>
					<textarea  class="form-control" name="mnogostroch"></textarea>
					<div class="m-1">
						Какой жанр игр прдепочитаете
					</div>
					<div class="p-1 mb-1 bg-secondary text-white">
						<input  class="form-control" name="zadachka" type="radio" value="РПГ">РПГ
						<input   class="form-control" name="zadachka" type="radio" value="РТС">РТС
						<input   class="form-control" name="zadachka" type="radio" value="Шутер">ШУТЕР
					</div>
					<div class="m-1">
						Если выбирать из двух жанров то какие?
					</div>
						<div class="p-1 mb-1 bg-danger text-white">
							<input class="form-control" name="a[]" type="checkbox" value="РПГ">РПГ
							<input  class="form-control" name="a[]" type="checkbox" value="РТС">РТС
							<input  class="form-control" name="a[]" type="checkbox" value="Шутер">ШУТЕР
						</div>
						<div class="mt-1" "mb-1">
							<input class="form-control" type="file" name="f" >
						</div>
						<div class= "m-1">
							<input class="btn btn-primary btn-lg btn-block"  type="submit" value="send">
						</div>
				</form>
			</div>
		</div>
			
	</body>
</html>