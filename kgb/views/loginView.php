<?php
    ob_start();
    session_start();

    if(!empty($_POST['email']) && !empty($_POST['password'])) {

        require('models/model.php');

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // Vérification de la syntaxe de l'email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location: index.php?error=1&message=Votre adresse email n\'est pas valide');
            exit();
        }

        // chiffrage du mp
        //$password = 'aq1'.sha1($password.'123').'25';

        // vérification si email déjà utilisé
        $req = $db->prepare('SELECT count(*) AS numberEmail FROM Admins WHERE email_admin = ?');
        $req->execute(array($email)); 

        While($email_verification = $req->fetch()) {
            if($email_verification['numberEmail'] != 1) {
                header('location: index.php?error=1&message=Impossible de vous authentifier.');
                exit();
            }
        }

        // Connexion 
        $req= $db->prepare('SELECT * FROM Admins WHERE email_admin = ?');
        $req->execute(array($email)); 

        while($admin = $req->fetch()) {
            if($password == $admin['password_admin']){

                $_SESSION['connect'] = 1;
                $_SESSION['email'] = $admin['email_admin']; 

                header('location: index.php?success=1');
                exit();
            }
            else {
                header('location: index.php?error=1&message=Impossible de vous authentifier.');
                exit();
            }

        }
    }

?>

<section class="row">
    <div class="col-8" id="login-body" >

        <?php
            if(isset($_SESSION['connect'])) {
                if(isset($_GET['success'])){
                    echo '<div class="alert success">Connexion réussie</div>';
                }
            
        ?>

        <small><a href="logout.php">Déconnection</a></small>

        <?php
            } else {
                if(isset($_GET['error'])) {
                    if(isset($_GET['message'])) {
                        echo '<div class="alert success">'.htmlspecialchars($_GET['message']).'</div>';
                    }
                }
 
        ?>

        <form method="post" action="index.php" >
            <!-- Email -->
            <div class="form-group">
                <input type="email" name="email" class="form-control p-4" placeholder="Votre adresse email" required>
            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" name="passsword" class="form-control p-4" placeholder="Votre mot de passe" required>
            </div>
            <!-- Remember me -->
            <div class="form-group form-check">
                <label for="checkbox" id="option" class="form-check-label"><input type="checkbox" id="checkbox" class="form-check-input" name="auto" checked>Se souvenir de moi</label>
            </div>
        
            <!-- Button-->
            <button type="submit" id="login-btn" class="btn btn-dark p-3">Se connecter</button>
        </form>

        <?php } ?>
    </div>
</section>

<?php
    $content = ob_get_clean();
    $title = "Connexion";
    require('../templates/template.php');
?>