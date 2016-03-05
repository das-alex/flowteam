<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
	<link rel="stylesheet" href="/themes/todo/css/style.css">
	<link rel="stylesheet" href="/themes/todo/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300italic,400italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<div class="left">
			<div class="logo">
				<img src="/themes/todo/img/logo.png" alt="лого">
			</div>
			<div class="menu_icon">
				<ul>
                    <a href="/index.php">
                        <li {if $enableIndex == true}class="active"{/if}><i class="fa fa-home"></i></li>
                    </a>
					<a href="/index.php?page=contacts">
                        <li {if $enableContacts == true}class="active"{/if}><i class="fa fa-user"></i></li>
                    </a>
					<a href="/index.php?page=messages">
                        <li {if $enableMessages == true}class="active"{/if}><i class="fa fa-envelope"></i></li>
                    </a>
					<a href="/index.php?page=projects">
                        <li {if $enableProjects == true}class="active"{/if}><i class="fa fa-file-text-o"></i></li>
                    </a>
                    <a href="/index.php?page=discussions">
                        <li {if $enableDiscussions == true}class="active"{/if}><i class="fa fa-commenting"></i></li>
                    </a>
					<a href="/index.php?page=news">
                        <li {if $enableNews == true}class="active"{/if}><i class="fa fa-newspaper-o"></i></li>
                    </a>
				</ul>
			</div>
		</div>
		<div class="right">
			<div class="right_header">

			</div>
			<div class="info">
                <!--
                    Условие, при котором будет появляться список контактов.
                    index.php?page=contacts
                -->
				{if $enableContacts == true}
                    {include file="contacts.tpl"}
                {/if}
                <!--
                    Условие, при котором будет появляться список сообщений.
                    index.php?page=messages
                -->
				{if $enableMessages == true}
                    {include file="messages.tpl"}
                {/if}
                <!--
                    Условие, при котором будет появляться список проектов.
                    index.php?page=projects
                -->
				{if $enableProjects == true}
                    {include file="projects.tpl"}
                {/if}
                <!--
                    Условие, при котором будет появляться список обсуждений.
                    index.php?page=discussions
                -->
				{if $enableDiscussions == true}
                    {include file="discussions.tpl"}
                {/if}
                <!--
                    Условие, при котором будет появляться список проектов.
                    index.php?page=news
                -->
				{if $enableNews == true}
                    {include file="news.tpl"}
                {/if}
                <!--
                    Условие, при котором будет появляться ошибка.
                    index.php?page=[Неверный Адрес]
                -->
				{if $enableError == true}
                    {include file="error.tpl"}
                {/if}
			</div>
		</div>
	</div>
    <script src="/themes/todo/js/slider.js"></script>
</body>
</html>
