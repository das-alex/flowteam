{foreach key=key item=item from=$arrayNews}
<div class="panel">
    <div class="panel-head">{$item.news_title}&nbsp;<a href="/index.php?page=news&news={$item.id}">#{$item.id}</a></div>
    <div class="panel-content">
    {$item.news_content}
    </div>
</div>
{/foreach}
