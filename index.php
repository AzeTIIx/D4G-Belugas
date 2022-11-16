<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index_style.css">
  <title>Document</title>
</head>
<body>
  <div class="navigation-box">
    <div class="nav-box">Premiere box </div>
    <div class="nav-box">Deuxieme box</div>
    <div class="nav-box">Troisieme box</div>
    <div class="nav-box">quatrièeme box</div>
    <div class="carte-box">Logo carte</div>
  </div>

  <!-- Faire une boucle basé sur le nombre de destination -->
  <!-- C'est le boc qui gère les menu rollup -->
  <div class="wrapper">
    <div class="collapsible">
          <input type="checkbox" id="collapsible-head">
        <label for="collapsible-head" classe="collapsible-head">Le menu s'enroule seul</label>
        <div class="collapsible-text">
          <h2>Liste des formations</h2>
          <div class="grid-box">
            <!-- faire une boucle foreach basé sur les formations dispo -->
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            <div class="formation-box">
              <div class="formation-box-haut">Titre de la formation</div>
              <div class="formation-box-main">Texte de la formation</div>
              <div class="formation-box-button">C'est le boutton </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="map-box">
    <h1>ICI C'EST LA CARTE</h1>
  </div>



</body>
</html>