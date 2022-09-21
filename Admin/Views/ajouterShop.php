<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Shop - Ajouter</title>
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
<div class="container p-3 mb-5" style="margin-top: 50px; max-width: 380px">
<button class="btn btn-close text-dark" style="color: white" onclick="window.location.href='shops.php'"></button>
<center>
  <span><h5 style="font-weight: bold;">Ajout d'un Shop</h5></span>
</center>
<div class="table-responsive">
  <form action="../Controllers/Shop.php" method="post" style="margin-bottom:50px" enctype="multipart/form-data">
      <label for="nom">Nom</label><br>
      <input type="text" name="nom" id="nom" required placeholder="De la paix" class="form-control"><br>
      <label for="email">Email </label><br>
      <input type="email" name="email" id="email" required placeholder="exemple@gmail.com" class="form-control"><br>
      <label for="passwd">Password</label><br>
      <input type="text" name="passwd" id="passwd" required placeholder="*******" class="form-control"><br>
      <label for="n">n°</label><br>
      <input type="number" name="n" id="n" placeholder="12" required class="form-control"><br>
      <label for="avenue">Avenue</label><br>
      <input type="text" name="avenue" id="avenue" placeholder="Depot" required class="form-control"><br>
      <label for="quartier">Quartier</label><br>
      <input type="text" name="quartier" id="quartier" placeholder="Kalubwe" required class="form-control"><br>
      <label for="commune">Commune</label><br>
      <select name="commune" id="commune" class="form-select">
        <option value="Select" disabled selected> ... </option>
        <option value="Lubumbashi">Lubumbashi</option>
        <option value="Kampemba">Kampemba</option>
        <option value="Ruashi">Ruashi</option>
        <option value="Kamalondo">Kamalondo</option>
        <option value="Kipushi">Kipushi</option>
        <option value="Annexe">Annexe</option>
      </select><br>
      <label for="telephone">Telephone</label><br>
      <input type="number" name="telephone" id="telephone" placeholder="996875512" required class="form-control"><br>
      <label for="file">Image</label><br>
      <input type="file" name="file" id="file" required class="form-control"><br>
      <input type="submit" value="Ajouter" name="ajouter" class="btn btn-dark"><br>
  </form>
</div>
</div>
  

<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>