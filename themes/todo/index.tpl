<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
	<link rel="stylesheet" href="themes/todo/css/style.css">
	<link rel="stylesheet" href="themes/todo/css/normalize.css">
	<link rel="stylesheet" href="themes/todo/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="flex_container">
		<header>
			<div class="header_wrapper">
				<div class="header_left_side">
					<img src="themes/todo/img/logo.png" width="22" height="40" alt="Logotype">
				</div>
				<div class="header_middle">
					<nav>
                        {if $isLogin == true}
						<ul>
							<a href="/index.php">
                           		<li {if $enableIndex == true}class="active"{/if}><i class="fa fa-home"></i>Главная</li>
                           	</a>
                            <a href="/index.php?page=contacts">
                                <li {if $enableContacts == true}class="active"{/if}><i class="fa fa-user"></i>Контакты</li>
                            </a>
                            <a href="/index.php?page=messages">
                                <li {if $enableMessages == true}class="active"{/if}><i class="fa fa-envelope"></i>Сообщения</li>
                            </a>
                            <a href="/index.php?page=projects">
                                <li {if $enableProjects == true}class="active"{/if}><i class="fa fa-file-text-o"></i>Проекты</li>
                            </a>
                            <a href="/index.php?page=discussions">
                                <li {if $enableDiscussions == true}class="active"{/if}><i class="fa fa-commenting"></i>Чат</li>
                            </a>
                            <a href="/index.php?page=news">
                                <li {if $enableNews == true}class="active"{/if}><i class="fa fa-newspaper-o"></i>Новости</li>
                            </a>
						</ul>
                        {/if}
					</nav>
				</div>
				<div class="header_right_side">
					<div>
						<img src="http://placehold.it/40x40" width="40" height="40" alt="avatar">
					</div>
					<p>username_name</p>
				</div>
			</div>
		</header>
		<div class="main">
            <div class="main_wrapper">
                {if $isLogin == true}

                    {if $enableIndex == true}
                        {include file="content.tpl"}
                    {/if}

				    {if $enableContacts == true}
                        {include file="contacts.tpl"}
                    {/if}

				    {if $enableMessages == true}
                        {include file="messages.tpl"}
                    {/if}

				    {if $enableProjects == true}
                        {include file="projects.tpl"}
                    {/if}

				    {if $enableDiscussions == true}
                        {include file="discussions.tpl"}
                    {/if}

				    {if $enableNews == true}
                        {include file="news.tpl"}
                    {/if}

				    {if $enableError == true}
                        {include file="error.tpl"}
                    {/if}

                {else}
                        {if $enableReg == true}
                            {include file="registration.tpl"}
                        {else}
                            {include file="auth.tpl"}
                        {/if}
                {/if}
			</div>
		</div>
	</div>
</body>
</html>
