<?php
    ob_start();
?>

<section class="row">
    <div class="col-8" id="login-body" >

        <form method="post" action="view/loginView.php" >
            <!-- Email -->
            <div class="form-group">
                <input type="email" class="form-control p-4" name="email" placeholder="Votre adresse email" required>
            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" class="form-control p-4" name="passsword" placeholder="Votre mot de passe" required>
            </div>
            <!-- Remember me -->
            <div class="form-group form-check">
                <label for="checkbox" id="option" class="form-check-label"><input type="checkbox" id="checkbox" class="form-check-input" name="auto" checked>Se souvenir de moi</label>
            </div>
        
            <!-- Button-->
            <button type="submit" id="login-btn" class="btn btn-dark p-3">Se connecter</button>
        </form>

    </div>
</section>

<?php
    $content = ob_get_clean();
    $title = "Connexion";
    require("templates/template.php");
?>