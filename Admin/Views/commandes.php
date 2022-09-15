<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <title>Commandes</title>
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
            <a class="nav-link" href="commandes.php" style="color: white">* Commandes</a>
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
            <a class="nav-link" href="administrateur.php">Administrateurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Controllers/Administrateur.php?d=1">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<!-- main -->
<div class="container" style="margin-top: 50px;">
  <button class="btn bg-dark" style="color: white">Ajouter</button>
  <br>
  <br>
  <div class="table-responsive">
    <table class="table table-responsive-md">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Shop</th>
        <th scope="col">Client</th>
        <th scope="col">Lieu</th>
        <th scope="col">Total</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>

      <tr>
        <td>1</td>
        <td>Mupendwa</td>
        <td>Kabwe Mulunda Ortega</td>
        <td>Lubumbashi, Kalubwe, Depot, 33</td>
        <td>1900</td>
        <td>2020-09-16</td>
        <td>en cours</td>
        <td><a href="detailsCommande.php" style="text-decoration: none;">Détails</a> &nbsp; <a href="" style="text-decoration: none;">Supprimer</a></td>
      </tr>
    </table>
  </div>
</div>
    

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>