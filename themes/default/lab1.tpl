<div class="panel panel-default">
  <div class="panel-heading">Лабораторная работа #1</div>
  <div class="panel-body">
  	{if $lab11_enable eq true}
  	<table class="table table-bordered">
  		<tr>
  			<td>Наименование</td>
  			<td>Ед. Измерения</td>
  			<td>Стоимость</td>
  		</tr>
  	</table>
  	{/if}
  	{if $lab12_enable eq true}
  	<table class="table table-bordered">
  		<tr>
  			<td>Наименование</td>
  			<td>Дата поступления</td>
  			<td>Количество</td>
  			<td>Номер накладной</td>
  		</tr>
  	</table>
  	{/if}
  	{if $lab13_enable eq true}
  	<table class="table table-bordered">
  		<tr>
  			<td>Наименование</td>
  			<td>Ед. Измерения</td>
  			<td>Дата</td>
  			<td>ФИО Лица</td>
  		</tr>
  	</table>
  	{/if}
  	  <div class="content-in">
  	  <form method="post" action="/index.php?page=lab1&lab=lab1">
        {if $lab11_enable eq true}
  	    <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Наименование" aria-descrideby="sizing-addon3" name="Name_1">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Ед. измерения" aria-descrideby="sizing-addon3" name="In_1">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-user"></span>
  	      </span>
  	      <input type="text" class="form-control" placeholder="Стоимость" aria-descrideby="sizing-addon3" name="Cost_1">
 	     </div>
         {/if}

         {if $lab12_enable eq true}
  	    <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Наименование" aria-descrideby="sizing-addon3" name="Name_2">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Дата поступления" aria-descrideby="sizing-addon3" name="Data_2">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-user"></span>
  	      </span>
  	      <input type="text" class="form-control" placeholder="Количество" aria-descrideby="sizing-addon3" name="Count_2">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-user"></span>
  	      </span>
  	      <input type="text" class="form-control" placeholder="Номер накладной" aria-descrideby="sizing-addon3" name="Num_2">
 	     </div>
         {/if}

         {if $lab13_enable eq true}
  	    <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Наименование" aria-descrideby="sizing-addon3" name="Name_3">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
   	     <span class="input-group-addon" id="basic-addon3">
    	      <span class="glyphicon glyphicon-user"></span>
    	    </span>
 	       <input type="text" class="form-control" placeholder="Ед. измерения" aria-descrideby="sizing-addon3" name="Count_3">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-user"></span>
  	      </span>
  	      <input type="text" class="form-control" placeholder="Дата" aria-descrideby="sizing-addon3" name="Data_3">
 	     </div>
 	     <div class="input-group input-group-sm" style="padding-bottom: 10px;">
 	       <span class="input-group-addon" id="basic-addon3">
 	         <span class="glyphicon glyphicon-user"></span>
  	      </span>
  	      <input type="text" class="form-control" placeholder="ФИО Лица" aria-descrideby="sizing-addon3" name="Fio_3">
 	     </div>
         {/if}

 	     <input class="btn btn-success" type="submit" value="Отправить">
 	     <a href="/index.php?page=lab1&lab=lab1">View 1</a>
 	     <a href="/index.php?page=lab1&lab=lab12">View 2</a>
 	     <a href="/index.php?page=lab1&lab=lab13">View 3</a>
 	     </form>
 	   </div>
	  </div>
</div>
