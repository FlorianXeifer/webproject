<?php
session_start();

try {
      //on se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=bdeweb;charset=utf8', 'root', 'root');

      if(isset($_POST['formconnexion']))
      {
        $mailconnect = htmlspecialchars($_POST['mailconnect']);
        $mdpconnect = sha1($_POST['mdpconnect']);
        if(!empty($mailconnect) AND !empty($mdpconnect))
        {
          $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
          $requser->execute(array($mailconnect, $mdpconnect));
          $userexist = $requser->rowCount();
          if($userexist == 1)
          {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['email'] = $userinfo['email'];
            header("Location: profil.php?id=".$_SESSION['id']);
          } else {
            $erreur = "Mauvais email ou mot de passe!";
          }
        } else {
          $erreur = "Tous les champs doivent être remplie!";
        }
      }

} catch (Exception $e) {
         //En cas d'erreur, on affiche un message et on arrête tout
         die('Erreur : ' . $e->getMessage());
}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />
        <link rel="stylesheet" type="text/css" href="css/styleConnexion.css?<?php echo time(); ?>" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css?<?php echo time(); ?>" />
        <link rel="stylesheet" media="(orientation:landscape)" href="css/style-menuBar.css?<?php echo time(); ?>">
        <title>Connexion</title>
    </head>

    <body>

    <!-- L'en-tête -->
    <header>
    <?php include("menuBar.php"); ?>
    </header>

    <!-- Le corps -->
    <div id="corps">


<div class="container">

            <section class="noS">
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="tologout"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="" autocomplete="on">
                                <h1>Connexion</h1>
                                <p>
                                    <label class="uname" data-icon="u" > Email : </label>
                                    <input name="mailconnect" type="email" placeholder="Email"/>
                                </p>
                                <p>
                                    <label class="youpasswd" data-icon="p"> Mot de passe : </label>
                                    <input name="mdpconnect" type="password" placeholder="mot de passe" />
                                </p>

                                <p class="login button">
                                    <input type="submit" name="formconnexion" value="Connexion" />
                                </p>
                                <p class="change_link">
                                    Pas encore inscrit ?
                                    <a href=inscription.php>Inscription</a>
                                </p>
                            </form>
                            </br>
                            <?php
                              if (isset($erreur))
                              {
                                echo '<font color="red">'.$erreur."</font>";
                              }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </div>

    </body>

</html>
