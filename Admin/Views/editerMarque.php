
<?php 

include ("../Db/Database.php");
include ("../Models/Marque.php");

$database = new Database();
$connexion = $database->getConnection();

$marque = new Marque($connexion);
if ($_GET["id"]) {

    $marque->idMarque = $_GET["id"];
    $res = $marque->oneMarque();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
<title>Administrateur - Editer</title>
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
<button class="btn btn-close text-dark" style="color: white" onclick="window.location.href='marques.php'"></button>
<center>
<span><h5 style="font-weight: bold;">Modification d'un marque</h5></span>
</center>
<div class="table-responsive">
<form action="../Controllers/Marque.php" method="post" style="margin-bottom:50px">
  <label for="nom">Nom</label><br>
  <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
  <input type="text" name="nom" id="nom" required placeholder="marque" class="form-control" value="<?=$res["nom"] ?>"><br>
  <input type="submit" value="Modifier" name="modifier" class="btn btn-dark"><br>
</form>
</div>
</div>


<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>