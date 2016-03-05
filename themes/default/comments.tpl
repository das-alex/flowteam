{if $comments_state == true}
	{foreach key=key item=item from=$comments}
		<div class="panel panel-info">
			<div class="panel-heading">
    			<h3 class="panel-title">Комментарий пользователя:&nbsp;{$item.user_name}</h3>
  			</div>
  			<div class="panel-body">
    			{$item.comment_text}
  			</div>
		</div>
	{/foreach}
{/if}
{if $auth_state == true}
	<form method="post" action="/index.php?page=news&news={$news_id}">
		<textarea type="text" class="form-control" placeholder="Введите сообщение" aria-descrideby="sizing-addon3" name="comment"></textarea>
		<input class="btn btn-info" type="submit" name="submit" value="Отправить" style="position: relative; margin-top: 1%;">
	</form>
{else}
<div class="alert alert-warning" role="alert">Чтобы оставить комментарий - вы должны пройти <a href="http://localhost/index.php?page=reg">регистрацию</a> или <a href="http://localhost/index.php?page=auth">войдите</a> в свой аккаунт!</div>
{/if}
