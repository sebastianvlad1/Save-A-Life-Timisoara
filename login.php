<?php
// Initializam sesiunea
session_start();

//Verificam daca userul este deja logat, in caz afirmativ il redireectionam
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
$username = $password = "";
$username_err = $password_err = "";
 
// Procesam data primita de la form
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verificam daca usernamme-ul este gol
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Verificam daca parola este gola
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validam datele
    if(empty($username_err) && empty($password_err)){
        
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                // Verificam daca exista username, daca da verificam parola
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Parola este  corecta, incepem o noua sesiune
                            session_start();
                            
                            // Stocam data in variable session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redireectionam userul
                            header("location: welcome.php");
                        } else{
                            // Arata erroare daca parola nu e valida
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Arata eroare daca usernameul nu este valid
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }
    // inchide conexiunea
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<head>>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="parinte-reg">
    <div class="copil-reg">
        <h2>Login</h2>
        <p>Introdu datele pentru a te loga.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span style="display: block;"><?php echo $username_err; ?></span>
            </div>    
            <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password">
                <span style="display: block;"><?php echo $password_err; ?></span>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <p>Daca nu ai cont <a href="register.php">Inregistreaza-te</a>.</p>
        </form>
    </div>   
    </div> 
</body>
</html>