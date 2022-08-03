
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Todo</title>
</head>

<body>
    <div class="container">


        <!-- LOGIN -->
        <div class="heading">
            <h1>Login</h1>
        </div>
        <form action="validation.php" method="post">
        <div class="input">
            <input type="text" placeholder="email"  name="user"/>
        </div>

        <div class="input">
            <input type="password" placeholder="Password" name="password" />

        </div>
        <div class="btn">
            <button type="submit">Login</button>
        </div>
    </form>




        <!-- sIGNUP -->
        <div class="heading">
            <h1>Signup</h1>
        </div>
        <form action="signup.php" method="post">
        <div class="input">
            <input type="text" placeholder="email" name="user"/>
        </div>

        <div class="input">
            <input type="password" placeholder="Password" name="password" />

        </div>
        <div class="btn">
            <button type="submit">Sign Up</button>
        </div>

    </form>


   
    </div>





</body>

</html>

