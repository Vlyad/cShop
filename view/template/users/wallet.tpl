{include file='layouts/header.tpl'}
<head>
    {if isset($smarty.session.Logged)}
        <title>{$title}</title>
    {else}
        <title>Musisz być zalogowany!</title>
    {/if}
</head>
<div class="main-text main-profile">
    {if isset($smarty.session.Logged)}
    <div class="row">
        <div class="col">
            Twoję pieniędzę: {$Wallet}zł
            {if isset($smarty.session.ErrorMsg)}
                <div class="alert alert-danger" role="alert">
                    {$smarty.session.ErrorMsg}
                </div>
            {/if}
            {if isset($smarty.session.Success)}
                <div class="alert alert-success" role="alert">
                    {$smarty.session.Success}
                </div>
            {/if}
            <br><br>
            Doładuj poprzez
            <br><br>
            <a href="/?page=payments">
                <img class="wallet-payments-img" src="/public/img/paypal_logo.png" alt="paypal_logo" title="paypal_logo">
            </a>
            <br><br>
        </div>

    </div>
    {else}
        <div class="alert alert-danger" role="alert">
            Musisz być zalogowany! <a href="/?page=login">Zaloguj!</a>
        </div>
    {/if}
</div>
{include file='layouts/footer.tpl'}
