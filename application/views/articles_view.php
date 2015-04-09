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

<!--http://stackoverflow.com/questions/11264411/codeigniter-ion-auth-check-login-->
<?php if ($this->ion_auth->logged_in()) {
$loggedin = true;
	echo 'yes';
} else {
$loggedin = false;
	echo 'no';
} ?>

<ul class="list-group">

	<?php foreach($articles as $item): ?>

		<li class="list-group-item"><?=$item['title']?></li>
		<li class="list-group-item"><?=$item['text']?></li>
		<li class="list-group-item"><?=$item['date']?></li>

	<?php endforeach; ?>


</ul>


</body>
</html>