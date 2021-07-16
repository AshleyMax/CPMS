<?php
include_once "../server/util.php";

    if (array_key_exists("sign-out-button", $_POST))
        logout();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/mainpage-style.css" />
</head>

<body>
    <!-- Header -->
    <header>
        <container style="color: #3dd2cc"> CCSCMW </container>
        <container>
            <div class="nav-links">
                <a href="#">About</a>
                <a href="#">Publications</a>
                <a href="#">Contact</a>
            </div>
        </container>

        <container>
            <form method="post">
                <button class="signup-button" onclick="" name="sign-out-button">Sign Out</button>
            </form>
            
        </container>
    </header>
</body>
</html>