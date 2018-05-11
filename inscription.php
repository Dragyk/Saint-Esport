<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <a href="index.php"> <img class="Top-left" src="/Image/Logo_ASSE.png" alt="Sainte E-sport"> </a>
    <?php
    if(isset($_SESSION['pseudo'])){
      echo '<div class="Membre">Connecté en tant que : '.$_SESSION['pseudo'].'
      <br>
      <a href="/pdo_deco.php">Deconnexion</a>
      </div>';
    }
    else{
      echo '
      <div class="Membre">
      <a class="Enregistrer" href="/inscription.php">inscrire</a>
      </br>
      <a class="Connexion" href="/connect.php">Connexion</a>
      </div>
      ';
    }
    ?>

    <h1 class="centrer"> SAINTE ESPORT </h1>


    <!-- BAR DE NAVIGATION  -->
    <nav class="nav-padding margin-top centrer">
      <a class="bar-espace" title="Accueil" href="index.php">ACCUEIL</a>
      <a class="bar-espace" title="Infos" href="/infos.php">INFOS</a>
      <a class="bar-espace" title="Partenaires" href="/partenaires/">PARTENAIRES</a>
      <a class="bar-espace" title="Contact" href="/contact/">CONTACT</a>
    </nav>
  </header>
  <?php
  if(isset($_SESSION['pseudo'])){
    echo $_SESSION['pseudo'];
  }

  ?>
  <h2 class="centrer">Inscription</h2>
  <form class="centrer" name="inscription" action="inscription.php" method="post">
    <label>
      Pseudo <input type="text" name="pseudo"  placeholder="Entrez votre Pseudo" <?php if (isset($_POST['pseudo'])) {echo 'value="'.$_POST['pseudo'].'" ';} ?> required="required">
    </label>
    <br>
    <label>
      Adresse Mail <input type="email" name="mail" placeholder="Entrez votre E-mail" required="required">
    </label>
    <?php
    include 'pdo_init.php';
    include 'pdo_new_user.php';
    ?>
    <br>
    <label>
      Mot de passe <input type="password" name="mdp1" placeholder="Entrez un mot de passe"<?php if (isset($_POST['mdp1'])) {echo 'value="'.$_POST['mdp1'].'" ';} ?> required="required">
    </label>
    <br>
    <label>
      Confirmation <input type="password" name="mdp2" placeholder="Entrez le même mot de passe" <?php if (isset($_POST['mdp2'])) {echo 'value="'.$_POST['mdp2'].'" ';} ?>required="required">
    </label>
    <br>
    <input type="submit" name="submit" value="S'inscrire">
  </form>
  </body>
  </html>
