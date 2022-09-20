<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <title>Shops</title>
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
            <a class="nav-link" href="shops.php" style="color: white">* Shops</a>
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
  <button class="btn bg-dark" style="color: white" onclick="window.location.href='ajouterShop.php'">Ajouter</button>
  <br>
  <br>
  <div class="table-responsive">
    <table class="table table-responsive-md">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Numero</th>
        <th scope="col">N°</th>
        <th scope="col">Avenue</th>
        <th scope="col">Quartier</th>
        <th scope="col">Commune</th>
        <th scope="col">Created</th>
        <th scope="col">Actions</th>
      </tr>

      <tr>
        <td>1</td>
        <td>Mupendwa</td>
        <td>mupendwa@gmail.com</td>
        <td>*********</td>
        <td>0996875512, 0828547535</td>
        <td>33</td>
        <td>Depot</td>
        <td>Kalubwe</td>
        <td>Lubumbashi</td>
        <td>2020-09-17</td>
        <td><a href="" style="text-decoration: none;">Editer</a> &nbsp; <a href="" style="text-decoration: none;">Supprimer</a></td>
      </tr>
    </table>
  </div>
</div>
    

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>