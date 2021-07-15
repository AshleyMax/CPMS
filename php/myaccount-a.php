<?php

session_start();

 include '../server/util.php';
 $db = connect_db();

 $EmailAddress = $_SESSION["username"];

 $query = "SELECT * FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";

 $result = sqlsrv_query($db, $query, array($EmailAddress));

 $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/modify-info.css" />
    <!-- v= php echo time(); -->

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
                <!-- Edit Personal Information Form-->
                <form-container>
                    <h3>Personal Information</h3>
                        <label for="fname">First name: &ensp;&emsp;&emsp;</label>
                        <?php echo $row['FirstName']; ?>
                        <br><br>

                        <label for="midinit">Middle Initial: &nbsp;&emsp;</label>
                        <?php echo $row['MiddleInitial']; ?>
                        <br><br>

                        <label for="lname">Last name:&nbsp;&ensp;&emsp;&emsp;</label>
                        <?php echo $row['LastName']; ?>
                        <br><br>

                        <label for="Affiliation">Affliation:&emsp;&emsp;&emsp;</label>
                        <?php echo $row['Affiliation']; ?>
                        <br><br>

                        <label for="Department">Department:  &nbsp;&nbsp;&ensp;&emsp;</label>
                        <?php echo $row['Department']; ?>
                        <br><br>

                        <label for="Address">Address: &emsp;&emsp;&emsp;&nbsp;&nbsp;</label>
                        <?php echo $row['Address']; ?>
                        <br><br>

                        <label for="City">City:  &nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;&nbsp;</label>
                        <?php echo $row['City']; ?>
                        <br><br>

                        <label for="State">State: &nbsp;&emsp;&emsp;&emsp;&emsp;&ensp;</label>
                        <?php echo $row['State']; ?>
                        <br><br>

                        <label for="Zipcode">ZipCode:  &ensp;&ensp;&emsp;&emsp;&ensp;</label>
                        <?php echo $row['ZipCode']; ?>
                        <br><br>

                        <label for="Email">Email: &nbsp;&emsp;&emsp;&emsp;&emsp;</label>
                        <?php echo $row['EmailAddress']; ?>
                        <br><br>

                        <button class="modify-button"><a href="myaccount-a-m.php">Modify Information</a></button>
                        
                </form-container>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;Password</h3>
                <pw-container>
                    <input type="text" id="Password" name="Password" value="**************" style="background-color: #dbdbdb; border: 1px solid #dbdbdb"><br><br>
                </pw-container>

                <pw-container>
                    <button class="modify-button"><a href="myaccount-a-mp.php">Change Password</a></button>
                </pw-container>

            </container2>

        </container2>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>