
<div class="container-fluid newsblock">

	<h3>Добавление новостей на главную страницу<span class="label label-default"></span></h3>
<?php	header('Content-Type: text/html; charset=utf-8');
	$link = site_url('/news/add_news/');


echo "<form action=$link method='post'>

Название новости </br><input type='text' name='title' class='form-control' placeholder='Название'/> <?=form_error('title')?> </br>
Текст новости </br><textarea  name='text' rows='10' cols='40' class='form-control' placeholder='Текст'>  </textarea> <?=form_error('text')?> </br>
<!--Дата добавления </br><input type='text' name='date' class='form-control' placeholder='Дата'/><?=form_error('date')?></br>-->
<input type='submit' name='add' value='Добавить' class='btn btn-primary btn-lg'/></br>

</form>";
	echo form_error('title');
?>
</div>


