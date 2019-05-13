<?php
// Initializam sesiunea
session_start();

 //Verificam daca userul este deja logat, in caz negativ il redireectionam
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="page-header">
        <h1 class="welcome">Buna, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bun venit in contul tau.</h1>
    </div>

        <div id="outer">
        <div id="inner">

            <div class="dropdown">
                <a href="index.php" class="dropbtn">Inapoi la site</a>
            </div>

            <div class="dropdown">
                <a href="logout.php" class="dropbtn">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>