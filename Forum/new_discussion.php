<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Forum | Zanga E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("../assets/entete.php"); ?>

  <form class="centrer" id="Form" name="new_discussion" action="new_discussion.php" method="post">
    <fieldset class="box">
      <legend><h2 class="centrer">Nouveau Sujet</h2></legend>
      <label>
        Titre du sujet: <br/><input class="input centrer" type="text" name="sujet" placeholder="Entrez le titre du sujet" required="required">
      </label>
      <br/>
      <label>
        <textarea class="input centrer" rows="4" cols="50" name="post" placeholder="Contenu du post, soyez poli et courtois" required="required"></textarea>
      </label>

      <?php
      include 'pdo_new_topics.php';
      ?>
      <br/>
      <input class="submit centrer" type="submit" name="submit" value="Poster">
    </fieldset>
  </form>
  <!-- FOOTER -->
  <?php include("../assets/footer.php")?>
</body>
</html>
