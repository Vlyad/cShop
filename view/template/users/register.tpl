{include file='layouts/header.tpl'}
<head><title>{$title}</title></head>
    <div class="main-text">
        <div class="row justify-content-center">
            <div class="col-md-6 login-form-1">
                <h2 class="navbar-brand">{$title}</h2>
                <form action="" method="post">

                    {if isset($smarty.session.ErrorMsg)}
                    <div class="alert alert-danger" role="alert">
                        {$smarty.session.ErrorMsg}
                    </div>
                    {/if}
                    <div class="form-group">
                        <label class="rejestracja">
                            <input type="text" name="login" class="form-control" placeholder="Login:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="rejestracja">
                            <input type="password" name="password" class="form-control" placeholder="Hasło:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="rejestracja">
                            <input type="password" name="password2" class="form-control" placeholder="Powtórz hasło:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Zarejestruj się!" />
                    </div>
                </form>
            </div>
        </div>
{include file='layouts/footer.tpl'}
