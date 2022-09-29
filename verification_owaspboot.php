<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
    // connexion à la base de données
    $PARAM_hote='localhost'; // le chemin vers le serveur
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
    $PARAM_nom_bd='testowasp';
    $connexion;
       	try {
    		
    		$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    		//echo '<script>alert ("ok connex");</script>)';echo $this->PARAM_nom_bd;
			$login = $_POST['login']; 
			$password = $_POST['password'];
			if($login !== "" && $password !== "")
			{	if(isset($_POST['ls']))
				{
					$requete='select * from user where login="'.$login.'" and mdp="'.$password.'";';
					$result=$connexion ->query($requete);
				}
				if(isset($_POST['lsm']))
				{
					$requete='select * from user where login="'.$login.'" and mdpcryp=MD5("'.$password.'");';
					$result=$connexion ->query($requete);
				}
				if ($result)
    
				{
					if ($result-> rowCount()==1)
					{
						$row = $result->fetch ( PDO::FETCH_OBJ);
						$_SESSION['login'] = $row->login;
						$_SESSION['id'] = $row->id;
						$_SESSION['categorie'] = $row->id;
						$_SESSION['nom'] = $row->nom;;
						//echo "<script>document.location='http://localhost/TPPHP-2021-owasp-boot/index.php'</script>";
						header('Location: index.php');
						//exit;
					}
					else
					{
						//var_dump($result-> rowCount());
						//var_dump($requete);
						//exit;
						//echo "<script>document.location='http://localhost/TPPHP-2021-owasp-boot/connexion.php?erreur=1'</script>";
						header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
					}
				}
				else
				{
					header('Location: connexion.php?erreur=3'); // pbs de requete
				}
			}
			else
			{
				header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
			}
		}
    	catch (PDOException $e)
    	{
    		echo 'hote: '.$PARAM_hote.' '.$_SERVER['DOCUMENT_ROOT'].'<br />';
    		echo 'Erreur : '.$e->getMessage().'<br />';
    		echo 'N° : '.$e->getCode();
    		$connexion=false;
    		echo '<script>alert ("pbs acces bdd");</script>)';
			//header('Location: connexion.php');
		}
        
}
else
{
   header('Location: connexion.php');
}
			


        
    

?>