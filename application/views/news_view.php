<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META NAME="Description" content="">
	<META NAME="Keywords" content="">
	<TITLE>page</TITLE>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<link href="http://calc.alex1c.com/css/mystyle.css" rel="stylesheet">
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

		<?php foreach($articles as $item): ?>

		  <div class="row show-grid bg">
			<li class="list-group-item"><?=$item['title']?></li>
			<li class="list-group-item"><?=$item['text']?></li>
			<li class="list-group-item"><?=$item['date']?></li>
		  </div>
		<?php endforeach; ?>
	</div>

	<div class="col-md-4 bg  ">

		<?php /*foreach($articles as $item): */?><!--
		  <div class="row show-grid bg">
			<li class="list-group-item"><?/*=$item['title']*/?></li>
			<li class="list-group-item"><?/*=$item['text']*/?></li>
			<li class="list-group-item"><?/*=$item['date']*/?></li>
		  </div>
		--><?php /*endforeach; */?>



		<div class="row show-grid bg">
			<li class="list-group-item"><center><script language="JavaScript" src="http://www.epwr.ru/merfi/data33utf8.js"></script><font size=1><a href="http://www.epwr.ru">Законы Мерфи</a></font></center></li>
			</br>
			<li class="list-group-item"><center><script language="JavaScript" src="http://www.epwr.ru/fact/data33utf8.js"></script><font size=1><a href="http://www.epwr.ru">Интересные факты</a></font></center></li>

		</div>

	</div>


</div>


<!--http://stackoverflow.com/questions/11264411/codeigniter-ion-auth-check-login-->
<?php if ($this->ion_auth->logged_in()) {
	$loggedin = true;
	echo 'yes';
} else {
	$loggedin = false;
	echo 'no';
} ?>



</body>
</html>