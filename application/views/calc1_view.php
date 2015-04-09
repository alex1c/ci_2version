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

		//	$( window ).load(function() {
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


<!--Ниже пробуем аякс-->

<div id="ajax_login">
	<form action="">
		Login: <input type="text" name="user_login" id="user_login"><br>
		Password: <input type="password" name="user_password" id="user_password"><br>
		<input type="button" name="send_data" id="send_data" value="Send" onclick="say()">
	</form>
</div>
<script type="text/javascript">
	function say(){
	//$('#send_data').live('click', (function(){
		// Сначала присваеваем переменным значения из наших полей ввода
		// Доступ к полям по их ID
		var user_login = $("#user_login").val();
		var user_password = $("#user_password").val();
		alert(user_login);
		// Это функция запроса ajax, в переменной html
		// мы сможем получить обратный текст после обработки
		var html = $.ajax({
			type: "POST",
			// Тут в качестве параметра url мы указываем на
			// controller который будет обрабатывать наши данные
			url: "<?=base_url()?>calc/login/",
			data: ({
				// Перечесляем передаваемые переменные
				// Сначала идёт название которое получит controller
				// через метод post, следом наша переменная с данными
				'user_login' : user_login,
				'user_password' : user_password
			}),
			dataType: "html",
			async: false
		}).responseText;
		alert(html);
		// Здесь мы просто перезаписываем div с id="ajax_login" данными
		// которые вернул наш controller
		$("#ajax_login").empty().append(html);
	}));

	//function say(){

	//	alert('yes');
	//}
</script>

</body>