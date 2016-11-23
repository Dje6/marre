<?php include 'include/pdo.php' ?>
<?php include 'include/functions.php' ?>

<?php include 'include/header.php' ?>

<main>

  <!-- =================================CARROUSSEL================================
  https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/manipuler-le-code-html-avec-jquery -->
  <div id="carrousel">
    <ul>
      <li><img src="image/1.jpg" /></li>
  	  <li><img src="image/2.jpg" /></li>
      <li><img src="image/3.jpg" /></li>
      <li><img src="image/2.jpg" /></li>
    </ul>
  </div>



  <table>
    <thead>
      <tr>
        <td>Nom du membre :</td>
        <td>Grade :</td>
        <td>Role :</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>G6</td>
        <td>General de projet</td>
        <td>Coordonner les equipes</td>
      </tr>
      <tr>
        <td>Ocelot</td>
        <td>Capitaine de la tete et des pieds</td>
        <td>Creer le header et le footer</td>
      </tr>
      <tr>
        <td>Hemelerb</td>
        <td>Lieutenant du formulaire</td>
        <td>Creer un formulaire dont on ne sait pas a quoi il servira</td>
      </tr>
      <tr>
        <td>Tatain</td>
        <td>Marechal des logis de l'index</td>
        <td>Creer ce magnifique index</td>
      </tr>
    </tbody>
  </table>

</main>


<?php include 'include/footer.php' ?>
