<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course system</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: whitesmoke;
            background-image: none;
        }

        .userdetails {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .user-details {
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 20px;
            text-align: center;
            color: 2 px solid black;

        }

        .submit-button {
            grid-column: span 3;
            margin: 20px 0;
            text-align: center;
        }

        .submit-button input {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
        }

        .submit-button input:hover {
            background-color: white;
            color: orange;
        }
    </style>
</head>

<body>
    <header class="sub-header">

    </header>
    <?php
    $con = mysqli_connect("localhost", "root", "", "cms");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $q = "select * from user";
    $rs = mysqli_query($con, $q);
    ?>

    <section class="userdetails">
        <?php
        $headings = array("User id", "User Name", "Password", "Email", "Age");
        foreach ($headings as $heading) {
            echo '<div class="user-details" style="font-size: 34px;color: black;font-weight: bolder;text-align: center;">' . $heading . '</div>';
        }

        while ($r = mysqli_fetch_array($rs)) {
            echo '<div class="user-details">' . $r[0] . '</div>';
            echo '<div class="user-details">' . $r[1] . '</div>';
            echo '<div class="user-details">' . $r[2] . '</div>';
            echo '<div class="user-details">' . $r[3] . '</div>';
            echo '<div class="user-details">' . $r[4] . '</div>';
        }
        ?>
    </section>

    <?php
    // Close the database connection
    mysqli_close($con);
    ?>
    <div class="submit-button">
        <form action=adminmain.php>
            <input type="submit" value=" ← BACK ">
        </form>
    </div>

</body>

</html>