{foreach key=key item=item from=$news}
	<div class="panel panel-default">
		<div class="panel-heading">{$item.news_title} <a href="/index.php?page=news&news={$item.id}">#{$item.id}</a></div>
		<div class="panel-body">
			{$item.news_content}
		</div>
		<ul class="list-group">
   		 	<li class="list-group-item">
   		 	<span class="label label-default">Комментариев:&nbsp;{$item.news_comments}</span>
   		 	</li>
  		</ul>
	</div>
{/foreach}
