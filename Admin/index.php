<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
    <title>Authentification</title>
</head>
<body style="background-color: #F8F9FA;">

    <div class="container shadow p-3 mb-5 bg-body rounded" style="max-width: 380px ; margin-top: 120px">

    <center>
        <span><h5 style="font-weight: bold;">Authentification tshombo</h5> &nbsp;&nbsp; <img src="./assets/images/tshombo.png" width="45px" height="45px"></span>
    </center>

    <form action="./Controllers/Administrateur.php" style="margin-top: 50px; margin-bottom:50px" method="post">
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" class="form-control" placeholder="exemple@gmail.com" autocomplete="off" required><br>
        <label for="passwd">Password</label>
        <input type="password" name="passwd" id="passwd" class="form-control" placeholder="*******" required><br>
        <input type="submit" value="Connexion" name="connexion" class="btn btn-dark"><br>
    </form>

    </div>
</body>
</html>