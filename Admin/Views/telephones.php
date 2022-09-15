<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <title>Telephones</title>
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
            <a class="nav-link" href="telephones.php" style="color: white">* Téléphones</a>
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
        <th scope="col">Marque</th>
        <th scope="col">Model</th>
        <th scope="col">Quantite</th>
        <th scope="col">Os</th>
        <th scope="col">Ecran</th>
        <th scope="col">Processeur</th>
        <th scope="col">Ram</th>
        <th scope="col">Stockage</th>
        <th scope="col">Photo</th>
        <th scope="col">Batterie</th>
        <th scope="col">Couleur</th>
        <th scope="col">Image</th>
        <th scope="col">Prix</th>
        <th scope="col">Actions</th>
      </tr>

      <tr>
        <td>1</td>
        <td>Mupendwa</td>
        <td>Samsung</td>
        <td>Galaxy s22 ultra</td>
        <td>20</td>
        <td>Android 12</td>
        <td>6,77</td>
        <td>2.40</td>
        <td>12</td>
        <td>512</td>
        <td>12Mpx + 1 capteur ultra grand angle</td>
        <td>5000</td>
        <td>grise</td>
        <td>h504c9cc85fd.png</td>
        <td>500</td>
        <td><a href="" style="text-decoration: none;">Editer</a> &nbsp; <a href="" style="text-decoration: none;">Supprimer</a></td>
      </tr>
    </table>
  </div>
</div>
    

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>