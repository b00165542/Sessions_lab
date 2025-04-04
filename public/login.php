<?php
global $Username, $Password;
require_once('../template/header.php');
require_once('../public/config.php');
?>
<link rel="stylesheet" type="text/css" href="../css/signin.css">
<title>Sign in</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>

    <?php
    if (isset($_POST['Submit'])){
        $inputUsername = $_POST['Username'];
        $inputPassword = $_POST['Password'];

        if ($inputUsername == $Username && $inputPassword == $Password){
            $_SESSION['Username'] = $inputUsername;
            $_SESSION['Active'] = true;
            header("Location: index.php");
            exit();
        }
        else{
            echo 'Incorrect Username or Password';
        }
    }
    ?>
</div>
</body>
</html>
