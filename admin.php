<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <div class="admin">
        <h1>Admin Login</h1>
        <form action="valid.php" method="post">
            <div class="input-box">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required><i class='bx bxs-user'></i><br><br>
            </div>
            <div class="input-box">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required><i class='bx bxs-lock-alt'></i><br><br>
            </div>
            <button type="submit" class="button" name="a1">Login</button><br>
        </form>
    </div>

    <link rel="stylesheet" href="admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</body>

</html>