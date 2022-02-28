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
                Twój Steam ID: {$Steam_id} <span class="profile_addition" data-toggle="modal" data-target="#steamid">(zmień)</span>
            </div>
            <div class="col">
                Twoję pieniędzę: {$Wallet}zł <span class="profile_addition"><a href="/?page=wallet">(doładuj)</a></span>
            </div>
            <div class="col">
                Aktywne usługi: VIP - Mirage <span class="profile_addition">(kup usługę)</span>
            </div>
        </div>
        {else}
            <div class="alert alert-danger" role="alert">
                Musisz być zalogowany! <a href="/?page=login">Zaloguj!</a>
            </div>
        {/if}
    </div>





<div class="modal fade" id="steamid" tabindex="-1" role="dialog" aria-labelledby="steamidTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="steamidTitle">Zmień Steam_ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/?page=profile&changesid=1">
            <div class="modal-body">
                <span class="profile_addition">Użyj steamID np (STEAM_0:0:11111111)</span><br>
                <span class="profile_addition">SteamID możesz znaleźć na stronie <a href="https://steamid.io/" target="_blank">Steamid.io</a></span>
                    <div class="form-group">
                        <label class="logowanie">
                            <input type="text" name="Steam_ID" class="form-control" placeholder="Steamid:" value="" />
                        </label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Zmień</button>
            </div>
            </form>
        </div>
    </div>
</div>
{include file='layouts/footer.tpl'}
