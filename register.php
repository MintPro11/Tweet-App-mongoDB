<?php
    session_start();
    require_once('dbconnect.php');

    if (isset($_SESSION['user'])){
        header('Location: home.php');
    }
 
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result  = $db->users->insertOne(array('username'=>$username,'password'=>$password));
        header('Location: index.php');

    }

?>

<html>
    <head>
        <title> Twitter Clone </title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>

                <label for="username">Username: </lable>
                <input type="text" name="username"> <br>

                <label for="password">Password: </lable>
                <input type="password" name="password"> <br>

                <input type="submit" name="submit" value="Sign Up">
            </fieldset>
        </form>
        <a href="index.php">Already have an account? Login here.</a>
</body>
</html>
