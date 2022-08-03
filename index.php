<?php



session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            background-image: url("https://images.pexels.com/photos/4245826/pexels-photo-4245826.jpeg");
        }

        .container {

            width: 50%;
            margin: auto;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 25%;
            color: whitesmoke
        }
        .logout{
            text-align: right;
        }

        a {
            text-decoration: none;
            font-size: 1.5rem;

        }

        button {
            background-color: aquamarine;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="logout">
        <button> <a href="logout.php">Log Out</a></button>


    </div>
    <div class="container">



        <h1>Hello Welcome Back <?php echo $_SESSION['username']; ?></h1>

    </div>

</body>

</html>