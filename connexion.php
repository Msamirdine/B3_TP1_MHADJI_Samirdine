<?php
	session_start();
	$PARAM_hote='localhost'; // le chemin vers le serveur
	$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
	$PARAM_nom_bd='testowasp';
	$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La tête dans les embruns</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap core JS-->
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery-3.6.0.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">BIENVENUE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<?php
						if(isset($_SESSION['login']))
						{
							echo '<li class="nav-item"><a class="nav-link" href="message.php">Les messages</a></li>';
							echo '<li class="nav-item"><a class="nav-link" href="deconnexion.php">Deconnexion</a></li>';
						}
						else
						{
							echo '<li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>';
						}
						?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- zone de connexion -->
            
            <form action="verification_owaspboot.php" method="POST">
                <h1>Connexion</h1>
                <div class="form-group">
                <label><b>Login d'utilisateur</b></label>
                <input type="text" class="form-control" placeholder="Entrer le Login d'utilisateur" name="login" required>
				<small  class="form-text text-muted">Nous ne cederons jamais votre email !.</small>
				</div>
				<div class="form-group">
                <label><b>Mot de passe</b></label>
                <input type="password" class="form-control" placeholder="Entrer le mot de passe" name="password" required>
				</div>
				</br></br>
                <input type="submit" class="btn btn-primary" id='submit' value='LOGIN SIMPLE' name='ls' ></br></br>
				<input type="submit" class="btn btn-primary" id='submit' value='LOGIN MD5' name='lsm' ></br></br>


                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                        echo "<p class='alert alert-danger' role='alert'>login ou mot de passe incorrect</p>";
                }

                ?>
            </form>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; La tête dans les embruns 2021</p><p class="m-0 text-center text-white">Copyright &copy; PF ROMEUF BTS SIO CARCOUET - Site de test CyberSécurité</p></div>
        </footer>

    </body>
</html>
