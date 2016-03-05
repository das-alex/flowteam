{if $auth_state != true}
<div class="panel panel-default">
  <div class="panel-heading">Форма входа</div>
  <div class="panel-body">
  	{if $auth_msg_state eq true}
  	<div class="alert alert-warning alert-dismissible" role="alert" style="margin-left: 10%;margin-right: 10%;">{$auth_msg}&nbsp;<a href="/index.php?page=auth">Отмена</a></div>
  	{/if}
  	  <div class="content-in">
  	  <form method="post" action="/index.php?page=auth">
  	    <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Имя пользователя" aria-descrideby="sizing-addon3" name="username">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-lock"></span>
  	      </span>
  	      <input type="password" class="form-control" placeholder="Пароль" aria-descrideby="sizing-addon3" name="password">
 	     </div>
 	     <input class="btn btn-success" type="submit" name="submit" value="Вход">
 	     </form>
 	   </div>
	  </div>
</div>
{/if}

{if $auth_state == true}
	{include file="error.tpl"}
{/if}
