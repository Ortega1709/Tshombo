<?php

  include ("../Db/Database.php");
  include ("../Models/Shop.php");
  include ("../Models/Marque.php");

  $database = new Database();
  $connexion = $database->getConnection();

  $shop = new Shop($connexion);
  $marque = new Marque($connexion);
  

  $result = $shop->shops();
  $result1 = $marque->voirMarque();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Telephone - Ajouter</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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
          <a class="nav-link" href="shops.php" >Shops</a>
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
<div class="container p-3 mb-5" style="margin-top: 50px; max-width: 380px">
<button class="btn btn-close text-dark" style="color: white" onclick="window.location.href='telephones.php'"></button>
<center>
  <span><h5 style="font-weight: bold;">Ajout d'un Telephone</h5></span>
</center>
<div class="table-responsive">
  <form action="../Controllers/Telephone.php" method="post" style="margin-bottom:50px" enctype="multipart/form-data">
    <label for="shop">Shop</label><br>
    <select name="shop" id="shop" class="form-select">
        <option value="" disabled selected> ... </option>
        <?php while($res = mysqli_fetch_assoc($result)) { ?>
        <option value="<?=$res["idShop"] ?>"><?=$res["nom"] ?></option>
        <?php } ?>
    </select><br>
    <label for="marque">Marque</label><br>
    <select name="marque" id="marque" class="form-select">
        <option value="" disabled selected> ... </option>
        <?php while($res1 = mysqli_fetch_assoc($result1)) { ?>
        <option value="<?=$res1["idMarque"] ?>"><?=$res1["nom"] ?></option>
        <?php } ?>
    </select><br>
    <label for="model">Modèle</label><br>
    <input type="text" name="model" id="model" placeholder="Galaxy note 8" required class="form-control"><br>
    <label for="os">Os</label><br>
    <input type="text" name="os" id="os" required placeholder="Android" class="form-control"><br>
    <label for="ecran">Ecran (inch)</label><br>
    <input type="text" name="ecran" id="ecran" required placeholder="6.77" class="form-control"><br>
    <label for="processeur">Processeur</label><br>
    <input type="text" name="processeur" id="processeur" required placeholder="Snapdragon 2.40Ghz" class="form-control"><br>
    <label for="ram">Ram (gb)</label><br>
    <input type="number" name="ram" id="ram" required placeholder="12" class="form-control"><br>
    <label for="stockage">Stockage (gb)</label><br>
    <input type="number" name="stockage" id="stockage" required placeholder="256" class="form-control"><br> 
    <label for="photo">Photo (mpx)</label><br>
    <input type="number" name="photo" id="photo" required placeholder="48" class="form-control"><br>
    <label for="batterie">Batterie (mAH)</label><br>
    <input type="number" name="batterie" id="batterie" required placeholder="5000" class="form-control"><br> 
    <label for="couleur">Couleur</label><br>
    <input type="text" name="couleur" id="couleur" required placeholder="Rouge, Noir" class="form-control"><br>
    <label for="prix">Prix (Fc)</label><br>
    <input type="number" name="prix" id="prix" required placeholder="450000" class="form-control"><br>
    <label for="quantite">Quantite</label><br>
    <input type="number" name="quantite" id="quantite" required placeholder="45" class="form-control"><br>
    <label for="image">Image</label><br>
    <input type="file" name="file" id="image" required class="form-control"><br>
    <input type="submit" value="Ajouter" name="ajouter" class="btn btn-dark"><br>
  </form>
</div>
</div>
  

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>