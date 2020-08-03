<?php
    require_once('database.php');
    ob_start();
    session_start();
    $connection = $database->getConnection();
    if (isset($_POST)) {
        $username = $_POST['login-username'];
        $password = $_POST['login-password'];
        // Not Secure. Vulnerable to SQL Injections !! 
        $temp_username = $username;
        $temp_password = $password;

        // Secure. Isn't vulnerabe to  SQL Injections !!
        // $temp_username = mysqli_escape_string($connection, $username);
        // $temp_password = mysqli_escape_string($connection, $password);
        $query = "SELECT * FROM users WHERE username = '$temp_username' AND password = '$temp_password'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="Assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="Assets/css/layout.css" rel="stylesheet">
    <!-- My Css -->
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>
<body>
    <p class='text-primary'>Query</p>
    <p><?php echo $query; ?></p>

    <?php
    $result = $connection->query($query);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    } else {
        $_SESSION['login_error'] = true;
        header("Location: login.php");
    }

}
?>    
</body>
</html>