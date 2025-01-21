<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur de visites</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
    .counter {
      font-size: 2rem;
      margin: 20px 0;
    }
    button {
      padding: 10px 20px;
      font-size: 1rem;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Compteur de visites</h1>
  <div class="counter">Nombre de visites : <span id="nbvisites"></span></div>
  <button id="reset">Réinitialiser</button>

  <script>
    // Récupérer ou initialiser le compteur
    let nbvisites = localStorage.getItem('nbvisites') ? parseInt(localStorage.getItem('nbvisites')) : 0;

    // Augmenter le compteur à chaque visite
    nbvisites++;
    localStorage.setItem('nbvisites', nbvisites);

    // Afficher le compteur
    document.getElementById('nbvisites').textContent = nbvisites;

    // Réinitialiser le compteur
    document.getElementById('reset').addEventListener('click', () => {
      nbvisites = 0;
      localStorage.setItem('nbvisites', nbvisites);
      document.getElementById('nbvisites').textContent = nbvisites;
    });
  </script>
</body>
</html>