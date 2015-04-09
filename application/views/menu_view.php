<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
	<div class="container">

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<?php
						$link = site_url();
						echo "<li class='navbar-brand'><a href= $link >GUIDEH</a></li>";
					?>

				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<?php
							$link = site_url();
							echo "<li class='active'><a href= $link >Главная</a></li>";
						?>

						<?php
							$link = site_url('/calc/');
							echo "<li><a href= $link >Калькулятор</a></li>";
						?>

						<?php
							//$link = site_url('/user_setting');
							//$link = $this->ion_auth->edit_user(3);
							$link = site_url('/user_setting');
							echo "<li><a href= $link >Настройки</a></li>";

						?>

						<?php if ($this->ion_auth->in_group('newsmaker'))
							//$user_groups = ;
						{
							//echo print_r($this->ion_auth->get_users_groups()->result());

							$link = site_url('/news/');
	                        echo "<li><a href= $link >Новости</a></li>";
						}
						?>
							<?php
							$link = site_url('/auth/logout');
	echo "<li><a href= $link >Выйти</a></li>";

	?>

						<?php

							$user = $this->ion_auth->user()->row();

							$link = site_url('/user_setting');
							echo "<li><a href= $link >$user->username</a></li>";
						//	echo "<li>$user->username </li>"?>


						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>-->
						</li>
					</ul>
				</div>
			</div>
		</nav>

	</div>
</div>