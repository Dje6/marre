<?php
include 'include/functions.php';


$error = array();

if (!empty($_POST['submit'])) {

  $nom = trim(strip_tags($_POST['nom']));
  $prenom = trim(strip_tags($_POST['prenom']));
  $mail = trim(strip_tags($_POST['mail']));
  $age = trim(strip_tags($_POST['age']));
  $sexe = trim(strip_tags($_POST['sexe']));
  $taille_du_sexe = trim(strip_tags($_POST['taille_du_sexe']));

    if (!empty($nom)) {

    } else {
      $error['nom'] = 'Vous devez renseigner un nom';
    }

    if (!empty($prenom)) {

    } else {
      $error['prenom'] = 'Vous devez renseigner un prenom';
    }

    if (!empty($mail)) {

    } else {
      $error['mail'] = 'Vous devez renseigner un email';
    }

    if (!empty($age)) {

    } else {
      $error['age'] = 'Vous devez renseigner votre age';
    }

    if (!empty($sexe)) {

    } else {
      $error['sexe'] = 'Vous devez renseigner votre sexe';
    }

    if (!empty($taille_du_sexe)) {

    } else {
      $error['taille_du_sexe'] = "Vous devez renseigner la taille de votre sexe";
    }

    if (count($error) == 0) {
      echo 'BRAVO VOUS ETES INSCRIT';
    }
}



include 'include/header.php';



?>

















<?php
include 'include/footer.php';
?>
