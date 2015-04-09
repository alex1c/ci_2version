<!-- Carousel
<

    ================================================== -->
<style type="text/css">

	.carousel-inner > .item > img {
		margin: 0 auto;
	}

</style>

<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<!--<li data-target="http://calc.alex1c.com/images/1.jpg" data-slide-to="0" class="active"></li>
		<li data-target="http://calc.alex1c.com/images/2.jpg" data-slide-to="1"></li>-->
		<?php
			$link = site_url('/images/1.jpg');
			echo "<li data-target=$link data-slide-to='0' class='active'></li>";
		?>
		<?php
			$link = site_url('/images/2.jpg');
			echo "<li data-target=$link data-slide-to='1'></li>";
		?>
		<?php
			$link = site_url('/images/3.jpg');
			echo "<li data-target=$link data-slide-to='2'></li>";
		?>

		<!--<li data-target="http://calc.alex1c.com/images/3.jpg" data-slide-to="2"></li>-->
	</ol>


	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<?php
				$link = site_url('/images/1.jpg');
				echo "<img class='first-slide' src=$link alt='First slide'>";
			?>
			<!--<img class="first-slide " src="http://calc.alex1c.com/images/1.jpg" width="1280" height="20%"  alt="First slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>Первый слайд.</h1>
					<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<?php
				$link = site_url('/images/2.jpg');
				echo "<img class='second-slide' src=$link alt='Second slide'>";
			?>
			<!--<img class="second-slide " src="http://calc.alex1c.com/images/2.jpg" width="1280" height="20%"  alt="Second slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>Второй слайд.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item">

			<?php
				$link = site_url('/images/3.jpg');
				echo "<img class='third-slide' src=$link alt='Third slide'>";
			?>

			<!--<img class="third-slide " src="http://calc.alex1c.com/images/3.jpg" width="1280" height="20%"  alt="Third slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>И третий слайд.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
			</div>
		</div>
	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div><!-- /.carousel -->
</div>