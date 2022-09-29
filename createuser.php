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
							if($_SESSION['categorie']==1)
							{
							echo '<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Gestion utilisateurs
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="createuser.php">Création</a>
										<a class="dropdown-item" href="#">Modification</a>
										<a class="dropdown-item" href="#">Suppression</a>
									</div>
								</li>';	
							}
							
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
 		<form action="#" method="POST">
                <h1>Création utilisateur</h1>
                <div class="form-group">
                <label><b>Nom</b></label>
                <input type="test" class="form-control" placeholder="Saisir le nom" name="nom" required>
				</div>
				<div class="form-group">
                <label><b>Login</b></label>
                <input type="text" class="form-control" placeholder="Saisir le login" name="login" required>
				</div>
				<div class="form-group">
                <label><b>Mot de passe</b></label>
                <input type="password" class="form-control" placeholder="Saisir le mot de passe" name="pass" required>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" class="typeuser" name="radio" value="1">
					<label class="form-check-label" for="inlineRadio1">Administrateur</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" class="typeuser" name="radio" value="2">
					<label class="form-check-label" for="inlineRadio2">Comptable</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" class="typeuser" name="radio" value="3">
					<label class="form-check-label" for="inlineRadio2">RH</label>
				</div>
				</br></br>
				<input type="submit" class="btn btn-primary" id='submit' value='Envoyer' >
				</br></br>
                <?php
				
					if(isset($_POST['nom']))
					{
						$nom=$_POST['nom'];
						$login=$_POST['login'];
						$pass=$_POST['pass'];
						$radio=$_POST['radio'];;
						$requete='INSERT INTO user (nom, login,mdp,mdpcryp,categorie) VALUES ("'.$nom.'","'.$login.'","'.$pass.'",MD5("'.$pass.'"),'.$radio.');';
						$result=$connexion ->query($requete);
					}
                ?>
            </form>
          
            
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; La tête dans les embruns 2021</p>
			<p class="m-0 text-center text-white">Copyright &copy; PF ROMEUF BTS SIO CARCOUET - Site de test CyberSécurité</p></div>
        </footer>

    </body>
</html>
