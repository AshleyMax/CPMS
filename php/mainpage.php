<?php 
    session_start();

    if(isset($_SESSION["message"]))
    {
        echo'<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
        unset($_SESSION["message"]);
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/mainpage-style.css" />

    <!-- Open Forms Script-->
    <script>

        //Functions toggle form visibiliy by updating display values
        function openLoginForm() {
            document.getElementById("loginForm").style.display = "block";
        }

        function closeLoginForm() {
            document.getElementById("loginForm").style.display = "none";
        }

        function openSignUpPanel() {
            document.getElementById("signUpPanel").style.display = "block";
        }

        function closeSignUpPanel() {
            document.getElementById("signUpPanel").style.display = "none";
        }
    </script>

</head>

<body>
    <!-- Header -->
    <?php include '../inc/header.php';?>

    <!-- Page Content -->
    <main-box>

        <!-- Left box contains organization info -->
        <left-box>
            <img src="../img/logo_transparent.png" width="250" height="250" style="margin-left: 250px" />
            <br />
            <desc>
                <p>
                    The Consortium for Computing Sciences in Colleges Midwest (CCSCMW) is a non-profit organization
                    focused on promoting quality computing curricula and the effective use of computing in colleges
                    and universities. <br /><br />

                    The CCSCMW typically holds its annual conference in mid autumn. Visit our about page for more
                    information regarding our conference and steps to participate.
                </p>
            </desc>

        </left-box>

        <!-- Right box contains image and form popups -->
        <div class="right-box">
            <div class="content">
                <img src="../img/main2.jpg" style="object-fit: cover" height="800" width="920" />
            </div>

            <!-- Login popup -->
            <div class="form-popup" id="loginForm">
                <form action="../server/login.php" class="form-container" method="post">
                    <h2>Login</h2>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" class="btn" name="main-login">Login</button>
                    <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
                </form>
            </div>

            <!-- SignUp popup-->
            <div class="form-popup" id="signUpPanel">
                <form action="/action_page.php" class="form-container">

                    <h2>Sign Up</h2>
                   
                    <button class="btn"><a href="author-signup.php" class="form-container">Sign Up as an Author</a></button>
                    <button class="btn"><a href="reviewer-signup.php" class="form-container">Sign Up as a Reviewer</a></button>
                  
                    <button type="button" class="btn cancel" onclick="closeSignUpPanel()">Close</button>
                </form>
            </div>
        </div>
    </main-box>
    <?php include '../inc/footer.php';?>
</body>
</html>