<div class="form_log_reg height_reg">
	<h1>Добро пожаловть!</h1>
	<p>Для продолжения необходимо <span class="bold">зарегестрироваться</span> или войти</p>
	{if msgState == true}
		{$errorMsg}
	{/if}
	<form method="POST" action="index.php?page=reg">
		<div>
			<span class="input_before"><i class="fa fa-user"></i></span>
			<input type="text" name="username" placeholder="имя пользователя">
		</div>
		<div>
			<span class="input_before"><i class="fa fa-envelope-o"></i></span>
			<input type="email" name="email" placeholder="адрес e-mail">
		</div>
		<div>
			<span class="input_before"><i class="fa fa-key"></i></span>
			<input type="password" name="password" placeholder="пароль">
		</div>
		<div>
			<span class="input_before"><i class="fa fa-key"></i></span>
			<input type="password" name="password" placeholder="подтвердите пароль">
		</div>
		<input class="login_button" type="submit" name="submit">
	</form>
	<a href="/index.php?page=auth">Вход</a>
</div>
