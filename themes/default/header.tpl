<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/themes/default/css/index.css" rel="stylesheet">
	<link href="/themes/default/css/bootstrap.min.css" rel="stylesheet">
	<link href="/themes/default/css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.php">Enigma v0.0.1</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Главная</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;Меню<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/index.php?page=profile&user={$user_id}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Мой профиль</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>&nbsp;Список пользователей</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Личные сообщения</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Добавить новость</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>&nbsp;Панель администратора</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      {if $auth_state == true}
       <p class="navbar-text">Добро пожаловать, <a href="/index.php?page=profile&user={$user_id}">{$user_name}</a>&nbsp;(<a href="/index.php?page=logout">Выход</a>)</p>
      {/if}
      {if $auth_state != true}
        <li><a href="/index.php?page=auth">Вход</a></li>
        <li><a href="/index.php?page=reg">Регистрация</a></li>
      {/if}
      </ul>
    </div>
  </div>
</nav>
