<div class="form_log_reg">
	<h1>Добро пожаловть!</h1>
	<p>Для продолжения необходимо зарегестрироваться или <span class="bold">войти</span></p>
	{if msgState == true}
		{$errorMsg}
	{/if}
	<form method="POST" action="index.php?page=auth">
		<div>
			<span class="input_before"><i class="fa fa-user"></i></span>
			<input type="text" name="username" placeholder="имя пользователя">
		</div>
		<div>
			<span class="input_before"><i class="fa fa-key"></i></span>
			<input type="password" name="password" placeholder="пароль">
		</div>
		<input class="login_button" type="submit" name="submit" value="отправить">
		<a class="link blue" href="/index.php?page=reg">Регистрация</a>
	</form>
</div>
