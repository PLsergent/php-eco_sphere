<?

require_once("./View/v_header.php");

?>

<body>
    <div class="container" style="max-width: 1000px; margin-top: 50px">
        <form action="http://localhost/index.php?ctrl=user&action=doLogin" method="POST">
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" name="email" placeholder="Email">
                </div>
                <?
                    if ($_GET["error"] == "email") {
                        ?> <small class="has-text-danger">Wrong email.</small> <?
                    }
                ?>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Email">
                </div>
                <?
                    if ($_GET["error"] == "password") {
                        ?> <small class="has-text-danger">Correct email but wrong password.</small> <?
                    }
                ?>
            </div>
            <p> <input type="submit" class="submit-btn button is-medium is-info" value="Submit"> </p>
        </form>
    </div>
</body>

<?

require_once("./View/v_footer.php");

?>