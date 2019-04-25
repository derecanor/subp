<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="meta description">
    <meta name=viewport content="device-width,initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<header>
<nav>
    <a href="#">
        <img src="image/logo.png" alt="pepsi" height="50" width="50">
    </a>
    <ul>
        <li><a href="header.php">Home</a> </li>
        <li><a href="">About</a> </li>
        <li><a href="">Tutor Profile</a> </li>
        <li><a href="">Student Coursework</a> </li>
        <li><a href="">Student Groups</a> </li>
        <li><a href="">Student  Feedback</a> </li>
    </ul>
    <div>
        <form action="contain/login.php" method="post">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="pswd" placeholder="password">
        <button type="submit" name="login">Login</button>
        </form>
        <a href="contain/signup.php">Register</a>
        <form action="contain/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</nav>
</header>
</body>
</html>