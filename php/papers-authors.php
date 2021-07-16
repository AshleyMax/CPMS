<?php

 include '../server/util.php';

 session_start();

 //if session username is not set deny entry
 if(!isset($_SESSION["username"]))
 {
     $_SESSION["msg"] = "You must be logged in to view this page.";
     header("Location: noaccess-login.php");
 }
 //if session username is not empty validate user is registered reviewr
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
 
 $row = get_reviewer_info($db, $EmailAddress);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/paper-authors-style.css" />

</head>

<body>
    <!-- Header -->
    <?php include '../inc/header-signedin.php';?>

    <box>
        <!-- Sidebar -->
        <sidebar>
            <button class="sidebar-btn">
                <img src="../img/icons8-person-50.png" />
                <br /><a href="myaccount-a.php">My Account</a>
            </button>

            <button class="sidebar-btn">
                <img src="../img/icons8-paper-50.png" />
                <br /><a href="papers-authors.php">Papers</a>
            </button>
        </sidebar>

        <!-- Page Content -->
        <container2>
            <welcome-bar>
                Papers
            </welcome-bar>

            <!-- Add paper boxes & paper info here -->
            <container3>
                <paper-box>
                    <button class="upload-paper-btn">
                        <img src="../img/icons8-upload-60.png" />
                        Upload New Paper
                    </button>
                    <!-- Option for file upload -->
                        <form action="../server/upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />
                               <br />
                            <input type="submit" value="Upload" />
                        </form>
                </paper-box>
                </paper-box>

            </container3>

        </container2>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>