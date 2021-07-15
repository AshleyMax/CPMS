<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/signup-style.css" />

</head>

<body>
    <!-- Page Content -->
    <box>
        <panel>
            <h2>Author Signup</h2>

            <form action="../server/process-author-signup.php" method = "post" class="form-container" name="author-signup-form">

                <h4>Fields labeled with an asterisk * are required.</h4>

                <!-- Personal Info -->
                <h3>Personal Information</h3>

                <label for="FirstName"><b>First Name*</b></label>
                <input type="text" placeholder="Enter First Name" name="FirstName" required>

                <label for="MiddleInitial"><b>Middle Initial</b></label>
                <input type="text" placeholder="" name="MiddleInitial">

                <label for="LastName"><b>Last Name*</b></label>
                <input type="text" placeholder="Enter Last Name" name="LastName" required>

                <label for="Affiliation"><b>Affiliation*</b></label>
                <input type="text" placeholder="Enter Affiliation" name="Affiliation" required>

                <label for="Department"><b>Department*</b></label>
                <input type="text" placeholder="Enter Department" name="Department" required>

                <label for="Address"><b>Street Address*</b></label>
                <input type="text" placeholder="Enter Street Address" name="Address" required>

                <label for="City"><b>City*</b></label>
                <input type="text" placeholder="Enter City" name="City" required>

                <label for="State"><b>State*</b></label>
                <input type="text" placeholder="Enter State" name="State" required>

                <label for="ZipCode"><b>ZipCode*</b></label>
                <input type="text" placeholder="Enter ZipCode" name="ZipCode" required>

                <label for="PhoneNumber"><b>Phone*</b></label>
                <input type="text" placeholder="Enter Phone Number" name="PhoneNumber" required>

                <label for="EmailAddress"><b>Email*</b></label>
                <input type="text" placeholder="Enter Email" name="EmailAddress" required>

                <label for="Password"><b>Create a Password*</b></label>
                <input type="password" placeholder="Enter Password" name="Password" required>

                <label for="Cpassword"><b>Confirm Password*</b></label>
                <input type="password" placeholder="Confirm Password" name="Cpassword" required>

                <button type="submit" name="author-submit" class="btn">Sign Up</button>

            </form>
        </panel>

    </box>
    <?php include '../inc/footer.php';?>
</body>
</html>