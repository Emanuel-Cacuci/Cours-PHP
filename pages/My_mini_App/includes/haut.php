<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My mini Site</title>
    <link rel="stylesheet" href="../asset/style.css">
    
</head>
<body>

    <header>  
         <img src="../asset/logo.png" alt="logo" class="logo">

        <nav>
         
            <ul>
            
            
            <?php if(isset($_SESSION['connected']) && $_SESSION['connected']){

             ?>
                <li><a href="../pages/home.php">Home</a></li>
                <li><a href="../pages/profil.php">Pofil</a></li>
                <li><a href="../pages/deconexion.php">Deconnexion</a></li>
                <li><a href="../pages/admin.php">Admin</a></li>
                <?php }else { ?>
                <li><a href="../pages/connexion.php" class="co">Connexion</a></li>
                <li><a href="../pages/inscription.php" class="in">Inscription</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>

</body>
</html>