<?php 
include '../server/util.php';

    session_start();
    //if session username is not set deny entry
    if(!isset($_SESSION["username"]))
    {
        $_SESSION["msg"] = "You must be logged in to view this page.";
        header("Location: noaccess-login.php");
    }
    //if session username is not empty validate user is registered author
    else
    {
        //if session username is not empty, 
        if (!empty($_SESSION["username"]))
            $EmailAddress = $_SESSION["username"];

        $db = connect_db();

        validate_author($db, $EmailAddress);
    }

    if (isset($_SESSION["message"]))
    {
        echo'<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
        unset($_SESSION["message"]);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/homepage-style.css?v=<?php echo time(); ?>" />

</head>

<body>
    <?php if(isset($_SESSION["success"])) : ?>
    
    <!-- Header -->
    <?php include '../inc/header-signedin.php';?>

    <!-- Page Content -->
    <welcome-bar>
        Welcome, <?php display_author_first($db, $EmailAddress);?>
    </welcome-bar>

    <nav-box>
        <button class="nav-box-btn">
            <img src="../img/icons8-person-50.png" />
            <br /><a href="myaccount-a.php">My Account</a>
        </button>

        <button class="nav-box-btn">
            <img src="../img/icons8-paper-50.png" />
            <br />
            <a href="papers-authors.php">Papers</a>
        </button>
    </nav-box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
    <?php endif ?>
</body>
</html>