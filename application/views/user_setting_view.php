<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META NAME="Description" content="">
	<META NAME="Keywords" content="">
	<TITLE>page</TITLE>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script>
		//$( document ).ready(function() {
		//	console.log( "document loaded" );
		//});

		//$( window ).load(function() {
		//	console.log( "window loaded" );
		//});
	</script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid ">

	<div class=" col-md-8 bg  ">

		<?php
			$user = $this->ion_auth->user()->row();
		//	echo "<pre>";
		//	echo print_r($user);
		//	echo gettype($user->created_on);
		//	echo date("F j, Y, g:i a",$user->last_login);
		//	echo date("F j, Y, g:i a",$user->created_on);
		//	echo "</pre>";
		?>

		<form id="data">

			<ul class="list-group">
				<li class="list-group-item"><b>Ваш ID: </b><?php echo $user->id ?></li>
				<li class="list-group-item"><b>Ваш IP адрес: </b><?php echo $user->ip_address ?></li>
				<li class="list-group-item"><b>Ваше имя пользователя: </b><?php echo $user->username ?></li>
				<li class="list-group-item"><b>Ваш email: </b><?php echo $user->email ?></li>
				<li class="list-group-item"><b>Пользователь создан: </b><?php echo date("F j, Y, g:i a",$user->created_on) ?></li>
				<li class="list-group-item"><b>Последний вход: </b><?php echo date("F j, Y, g:i a",$user->last_login) ?></li>
				<li class="list-group-item"><b>Имя: </b><?php echo $user->first_name ?><input type="text" size="50" class="my-input" placeholder="Новое имя" name="newname"></li>
				<li class="list-group-item"><b>Фамилия: </b><?php echo $user->last_name ?><input type="text" size="50" class="my-input" placeholder="Новая фамилия" name="newfam"></li>
				<li class="list-group-item"><b>Компания: </b><?php echo $user->company ?><input type="text" size="50" class="my-input" placeholder="Новое название" name="newcomp"> </li>
				<li class="list-group-item"><b>Телефон: </b><?php echo $user->phone ?> <input type="text" size="50" class="my-input" placeholder="Новый номер" name="newphone"> </li>
			</ul>

			<?php
				//$user = $this->ion_auth->user()->row();
				//echo "<input type='hidden' name='id' value=$user->id";
				//echo $user->id;
			?>

            <?php
				$user = $this->ion_auth->user()->row();
				echo "<input type='hidden' name='id' value='$user->id'>";


			$link = site_url('/user_setting/edit_setting');
			echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' form='data'>Изменить</button>";
            ?>

		</form>




	</div>
</div>
</body>
</html>