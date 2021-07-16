<?php 
    include '../server/util.php';

    session_start();

    //if session username is not set deny entry
    if(!isset($_SESSION["username"]))
    {
        $_SESSION["msg"] = "You must be logged in to view this page.";
        header("Location: noaccess-login.php");
    }

    //if session username is not empty validate user is registered reviewer
    else
    {
        //if session username is not empty, 
        if (!empty($_SESSION["username"]))
            $EmailAddress = $_SESSION["username"];


        $db = connect_db();

        validate_reviewer($db, $EmailAddress);
    }
    
    //handle logout
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION["username"]);
        header("Location : ../html/mainpage.html");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/homepage-style.css" />


</head>

<body>
    <?php if(isset($_SESSION["success"])) : ?>

    <!-- Header -->
    <?php include '../inc/header-signedin.php';?>

    <!-- Page Content -->
    <welcome-bar>
        Welcome, <?php display_reviewer_first($db, $EmailAddress);?>
    </welcome-bar>

    <nav-box>
        <button class="nav-box-btn">
            <img src="../img/icons8-person-50.png" />
            <br /><a href="myaccount-r.php">My Account</a>
        </button>

        <button class="nav-box-btn">
            <img src="../img/icons8-paper-50.png" />
            <br />
            Papers
        </button>

        <button class="nav-box-btn" onclick="OpenReviewForm()">
            <img src="../img/icons8-survey-50.png" />
            <br />
            Reviews
        </button>
    </nav-box>
    <!-- Footer -->
    <?php include '../inc/footer.php';?>
    <?php endif ?>
</body>
</html>