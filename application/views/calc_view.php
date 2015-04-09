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

<div class="container-fluid newsblock">

	<h3>Тест работы калькулятора и формирование файла pdf<span class="label label-default"></span></h3>

<input type="button" value="Нажми!" onclick="$('#span').css('display','')">
    <span id="span" style="display:none;background:#00968E;padding:5px;color:#fff;">
        Пример изменения одного атрибута удался!
    </span>

<script>
	function plus_ten(){

		var cur_value = $('#text').attr('value');
		cur_value = parseInt(cur_value) + 10;
		$('#text').attr('value',cur_value);

	}
</script>
<input type="button" value="+10" onclick="plus_ten()">
<input type="text" id="text" value="0"/>

<?php
	$link = site_url('/calc/pdf/');
echo "<form>

	<p><button formaction=$link>Сделать pdf файл</button></p>

</form>";

?>


</div>


<script type="text/javascript">
	/*
	 * Функция подсчета стоимости услуг на создания дизайна сайта
	 */
	function calc() {
		//получаем ссылку на элемент Select (Тип дизайна)
		var type_design = document.getElementById("type_design");
		//получаем ссылку на чекбокс (Требуется верстка?)
		var is_html = document.getElementById("is_html");
		//получаем ссылку на элемент input (Кол-во вариантов)
		var count = document.getElementById("count");
		//получаем ссылку на элемент span, в него будем писать стоимость дизайна
		var result = document.getElementById("result");

		var price = 0;
		price += parseInt(type_design.options[type_design.selectedIndex].value);
		price += (is_html.checked == true) ? parseInt(is_html.value) : 0;
		price = parseInt(count.value) * price;

		result.innerHTML = price;
	}

</script>

<body>
<b>Тип дизайна:</b><br/>
<select onchange="calc()" id="type_design">
	<option value="0">Выбрать</option>
	<option value="5000">Простой дизайн сайта</option>
	<option value="7000">Сложный дизайн сайта</option>
	<option value="10000">Дизайн интернет-магазина</option>
</select><br/>
<input type="checkbox" onchange="calc()" value="3000" id="is_html" />
<label for="is_html">Требуется верстка?</label>
<br/>
Кол-во вариантов: <input type="text" id="count" value="1" onchange="calc()" />
<div>Стоимость дизайна сайта: <span id="result">0</span> руб.</div>

<!--Ниже пробуем аякс-->

<div id="ajax_login">
	<form action="">
		Login: <input type="text" name="user_login" id="user_login"><br>
		Password: <input type="password" name="user_password" id="user_password"><br>
		<input type="button" name="send_data" id="send_data" value="Send">
	</form>
</div>

<script type="text/javascript">
	$('#send_data').on('click', (function(){
		// Сначала присваеваем переменным значения из наших полей ввода
		// Доступ к полям по их ID
		console.log( "we are in" );
		var user_login = $("#user_login").val();
		var user_password = $("#user_password").val();

		// Это функция запроса ajax, в переменной html
		// мы сможем получить обратный текст после обработки
		var html = $.ajax({
			type: "POST",
			// Тут в качестве параметра url мы указываем на
			// controller который будет обрабатывать наши данные
			url: "<?=base_url()?>calc/login",
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

		// Здесь мы просто перезаписываем div с id="ajax_login" данными
		// которые вернул наш controller
		$("#ajax_login").empty().append(html);
	}));
</script>


<div id = "calc">
	<form action="">

		Марка <select id="select_marka">
			<option value="0">Выберите марку</option>
			</select><br/>

	</form>

</div>

<script type="text/javascript">
	$('#select_marka').on('click', (function(){
		// Сначала присваеваем переменным значения из наших полей ввода
		// Доступ к полям по их ID
		console.log( "we are in" );
		//var user_login = $("#user_login").val();
		//var user_password = $("#user_password").val();

		// Это функция запроса ajax, в переменной html
		// мы сможем получить обратный текст после обработки
		var html = $.ajax({
			type: "POST",
			// Тут в качестве параметра url мы указываем на
			// controller который будет обрабатывать наши данные
			url: "<?=base_url()?>calc/get_all_mark",
			data: ({
				// Перечесляем передаваемые переменные
				// Сначала идёт название которое получит controller
				// через метод post, следом наша переменная с данными
			//	'user_login' : user_login,
			//	'user_password' : user_password
			}),
			dataType: "html",
			async: false
		}).responseText;

		// Здесь мы просто перезаписываем div с id="ajax_login" данными
		// которые вернул наш controller
		alert(html);
		//for(var i = 0; i < html.length; i++) alert(html[i]);
		$("#calc").empty().append(html);
	}));
</script>

</body>
</html>