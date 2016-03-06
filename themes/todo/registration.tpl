<div class="panel">
    <div class="panel-head">
        Форма регистрации
    </div>
    <div class="panel-content">
        {if msgState == true}
            {$errorMsg}
        {/if}
        <form method="POST" action="index.php?page=reg">
            <input class="input" type="text" name="username">
            <input class="input" type="password" name="password">
            <input class="button color" type="submit" name="submit">
        </form>
    </div>
</div>
