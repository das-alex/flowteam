{include file="header.tpl"}
<div class="content">
            {if $error_enable eq true}
                {include file="error.tpl"}
            {/if}
            {if $auth_enable eq true}
                {include file="auth.tpl"}
            {/if}
            {if $reg_enable eq true}
                {include file="reg.tpl"}
            {/if}
            {if $index_enable eq true}
                {include file="news.tpl"}
            {/if}
            {if $news_full_bool eq true}
                {include file="news_full.tpl"}
            {/if}
            {if $lab1_enable eq true}
                {include file="lab1.tpl"}
            {/if}
            {if $profile_enable eq true}
                {include file="profile.tpl"}
            {/if}
			{if $showUsers eq true}
                {include file="showUsers.tpl"}
            {/if}
</div>

{include file="footer.tpl"}
