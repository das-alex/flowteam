{if $auth_state != true}
<div class="panel panel-default">
  <div class="panel-heading">Форма регистрации</div>
  <div class="panel-body">
  	{if $reg_msg_state eq true}
  	<div class="alert alert-warning alert-dismissible" role="alert" style="margin-left: 10%;margin-right: 10%;">{$reg_msg}&nbsp;<a href="/index.php?page=reg">Отмена</a></div>
  	{/if}
  	  <div class="content-in">
  	  <form method="post" action="/index.php?page=reg">
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
 	     <input class="btn btn-warning" type="submit" name="submit" value="Регистрация">
 	     </form>
 	   </div>
	  </div>
</div>
{/if}

{if $auth_state == true}
  {include file="error.tpl"}
{/if}
