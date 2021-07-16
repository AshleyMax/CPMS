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
    <link rel="stylesheet" href="../css/assets.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/modify-info.css?v=<?php echo time(); ?>" />
</head>

<body>
    <!-- Header -->
    <?php include '../inc/header-signedin.php';?>

    <box>
        <!-- Sidebar -->
        <sidebar>
            <button class="sidebar-btn">
                <img src="../img/icons8-person-50.png" />
                <br />My Account
            </button>

            <button class="sidebar-btn">
                <img src="../img/icons8-dashboard-50.png" />
                <br />Dashboard
            </button>


            <button class="sidebar-btn">
                <img src="../img/icons8-paper-50.png" />
                <br />
                Papers
            </button>
        </sidebar>

        <!-- Page Content -->
        <container2>
            <welcome-bar text-align="center">
                <welcome-text>
                    My Account
                </welcome-text>
            </welcome-bar>

            <container2>
                <h2>Personal Information</h2>

                <!-- Edit Personal Information Form-->
                <form-container>
                    <form action="../server/modify-reviewer.php" method = "post" name="reviewer-modify">
                        <label for="fname">First name: &ensp;&emsp;&emsp;</label>
                        <input type="text" id="FirstName" name="RMFirstName"><br><br>

                        <label for="midinit">Middle Initial: &nbsp;&emsp;</label>
                        <input type="text" id="MiddleInitial" name="RMMiddleInitial"><br><br>

                        <label for="lname">Last name:&nbsp;&ensp;&emsp;&emsp;</label>
                        <input type="text" id="LastName" name="RMLastName"><br><br>

                        <label for="Afflication">Affliation:&emsp;&emsp;&emsp;</label>
                        <input type="text" id="Affliation" name="RMAffiliation"><br><br>

                        <label for="Department">Department:  &nbsp;&nbsp;&ensp;&emsp;</label>
                        <input type="text" id="Dept" name="RMDepartment"><br><br>

                        <label for="Address">Address: &emsp;&emsp;&emsp;&nbsp;&nbsp;</label>
                        <input type="text" id="Address" name="RMAddress"><br><br>

                        <label for="City">City:  &nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;&nbsp;</label>
                        <input type="text" id="City" name="RMCity"><br><br>

                        <label for="State">State: &nbsp;&emsp;&emsp;&emsp;&emsp;&ensp;</label>
                        <input type="text" id="State" name="RMState"><br><br>

                        <label for="Zipcode">Zipcode:  &ensp;&ensp;&emsp;&emsp;&ensp;</label>
                        <input type="text" id="ZipCode" name="RMZipCode"><br><br>

                        <label for="Email">Email: &nbsp;&emsp;&emsp;&emsp;&emsp;</label>
                        <input type="text" id="EmailAddress" name="RMEmailAddress"><br><br>

                        <input type="submit" class="save-button" value="Save Changes" style="margin-left: 0px" name="modify-reviewer"><br /><br />
                    </form>
                </form-container>

                <h2>Password</h2>
                <pw-container>
                    <input type="text" id="Password" name="Password" value="*****" style="background-color: #dbdbdb; border: 1px solid #dbdbdb"><br><br>
                </pw-container>

                <pw-container>
                    <button class="modify-button">Change Password</button>
                </pw-container>

            </container2>

        </container2>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>