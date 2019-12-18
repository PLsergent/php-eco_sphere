<?

require_once("./View/v_header.php");

?>

<body>
    <div class="container" style="max-width: 1000px; margin-top: 50px">
        <section id="main-section">
            <form action="http://localhost/index.php?ctrl=user&action=doCreate" method="POST">
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" name="email" placeholder="Email" required>
                    </div>
                    <?
                        if (!empty($_GET["error"])) {
                            ?> <small class="has-text-danger">Email already used please choose an other one.</small> <?
                        }
                    ?>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Nom</label>
                    <div class="control">
                        <input class="input" type="text" name="lastName" placeholder="Nom" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Prénom</label>
                    <div class="control">
                        <input class="input" type="text" name="firstName" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Adresse</label>
                    <div class="control">
                        <input class="input" type="text" name="address" placeholder="Adresse" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Code postal</label>
                    <div class="control">
                        <input class="input" type="text" name="postalCode" placeholder="Code postal" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Ville</label>
                    <div class="control">
                        <input class="input" type="text" name="city" placeholder="Ville" required>
                    </div>
                </div>
                <p> <input type="submit" class="submit-btn button is-medium is-info" value="Submit"> </p>
            </form>
        </section>
    </div>
</body>

<?

require_once("./View/v_footer.php");

?>