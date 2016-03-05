{foreach key=key item=item from=$news_full}
	<div class="panel panel-default">
		<div class="panel-heading">{$item.news_title}</div>
		<div class="panel-body">
			{$item.news_content}
		</div>
		<ul class="list-group">
   		 	<li class="list-group-item">
   		 	<span class="label label-default">Комментариев:&nbsp;{$item.news_comments}</span>
   		 	</li>
  		</ul>
	</div>
{include file="comments.tpl"}
{/foreach}
