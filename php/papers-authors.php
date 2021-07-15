﻿<!DOCTYPE html>
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
                </paper-box>


                <paper-box>
                    <button class="delete-paper-btn">
                        <img src="../img/icons8-delete-bin-48.png" height="20" width="20" />
                    </button>
                    <h1>Paper</h1>
                    <h1>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</h1>
                    <br><br>
                    <h2>Topic: Lorem Ipsum Dolor</h2>
                    <h2>Submitted: 06/18/2021 - 11:21 AM</h2>
                </paper-box>


                <paper-box>
                    <button class="delete-paper-btn">
                        <img src="../img/icons8-delete-bin-48.png" height="20" width="20" />
                    </button>
                    <h1>Paper</h1>
                    <h1>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</h1>
                    <br><br>

                    <h2>Topic: Lorem Ipsum Dolor</h2>
                    <h2>Submitted: 06/21/2021 - 5:27 PM</h2>
                </paper-box>

                <paper-box>
                    <button class="delete-paper-btn">
                        <img src="../img/icons8-delete-bin-48.png" height="20" width="20" />
                    </button>
                    <h1>Paper</h1>
                    <h1>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</h1>
                    <br><br>
                    <h2>Topic: Lorem Ipsum Dolor</h2>
                    <h2>Submitted: 06/22/2021 - 7:39 PM</h2>
                </paper-box>

                <paper-box>
                    <button class="delete-paper-btn">
                        <img src="../img/icons8-delete-bin-48.png" height="20" width="20" />
                    </button>
                    <h1>Paper</h1>
                    <h1>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</h1>
                    <br><br>
                    <h2>Topic: Lorem Ipsum Dolor</h2>
                    <h2>Submitted: 06/30/2021 - 9:36 AM</h2>
                </paper-box>

            </container3>

        </container2>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>