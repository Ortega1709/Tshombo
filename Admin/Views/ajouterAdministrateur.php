
<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Administrateur - Ajouter</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#" title="Administrateur ">
      <img src="../assets/images/tshombo.png" alt="" width="25" height="24" class="d-inline-block align-text-top"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shops.php">Shops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clients.php">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commandes.php">Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="telephones.php">Téléphones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marques.php">Marques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="promotions.php">Promotions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="administrateur.php" style="color: white">* Administrateurs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Controllers/Administrateur.php?d=1">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- main -->
<div class="container p-3 mb-5" style="margin-top: 50px; max-width: 380px">
<button class="btn btn-close text-dark" style="color: white" onclick="window.location.href='administrateur.php'"></button>
<center>
  <span><h5 style="font-weight: bold;">Ajout d'un administrateur</h5></span>
</center>
<div class="table-responsive">
  <form action="../Controllers/Administrateur.php" method="post" style="margin-bottom:50px">
      <label for="nom">Nom complet</label><br>
      <input type="text" name="nom" id="nom" required placeholder="nom - post - prenom" class="form-control"><br>
      <label for="email">Email</label><br>
      <input type="email" name="email" id="email" required placeholder="exemple@gmail.com" class="form-control"><br>
      <label for="passwd">Password</label><br>
      <input type="text" name="passwd" id="passwd" required placeholder="*******" class="form-control"><br>
      <input type="submit" value="Ajouter" name="ajouter" class="btn btn-dark"><br>
  </form>
</div>
</div>
  

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>