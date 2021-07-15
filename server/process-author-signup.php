<?php 
include 'util.php';

if (isset($_POST["author-submit"]))
{
    //*initialize session
    session_start();

    //query definitions
    $check_email_query = "SELECT CPMS.dbo.Author.EmailAddress FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";

    $register_author = "INSERT INTO CPMS.dbo.Author (CPMS.dbo.Author.FirstName, 
                                          CPMS.dbo.Author.MiddleInitial, 
                                          CPMS.dbo.Author.LastName, 
                                          CPMS.dbo.Author.Affiliation, 
                                          CPMS.dbo.Author.Department, 
                                          CPMS.dbo.Author.Address, 
                                          CPMS.dbo.Author.City, 
                                          CPMS.dbo.Author.State, 
                                          CPMS.dbo.Author.ZipCode, 
                                          CPMS.dbo.Author.PhoneNumber, 
                                          CPMS.dbo.Author.EmailAddress, 
                                          CPMS.dbo.Author.Password) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


    //initilize error array - keeps tracks of errors that may occur during signup
    $errors = array();

    //initialize middleinital in case of null value
    $MiddleInitial = '';

    //establish and check connection 
    $db = connect_db();

    // Get form values from form
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $MiddleInitial = $_POST['MiddleInitial'];

    $Affiliation = $_POST["Affiliation"];
    $Department = $_POST['Department'];

    $Address = $_POST["Address"];
    $City = $_POST["City"];
    $State = $_POST["State"];
    $ZipCode = $_POST["ZipCode"];

    $PhoneNumber = $_POST["PhoneNumber"];
    $EmailAddress = $_POST["EmailAddress"];

    //password & confirmed password
    $Password = $_POST["Password"];
    $Cpassword = $_POST["Cpassword"];

    /* FORM VALIDATION */

    //Required fields cannot be empty
    if (empty($FirstName)){array_push($errors,      "First name is required");}
    if (empty($LastName)){array_push($errors,      "Last name is required");}
    if (empty($Affiliation)){array_push($errors, "Affiliation is required");}
    if (empty($Department)){array_push($errors, "Department is required");}
    if (empty($Address)){array_push($errors,    "Address is required");}
    if (empty($City)){array_push($errors,       "City is required");}
    if (empty($State)){array_push($errors,      "State is required");}
    if (empty($ZipCode)){array_push($errors,    "Zipcode is required");}
    if (empty($PhoneNumber)){array_push($errors,      "Phone is required");}
    if (empty($EmailAddress)){array_push($errors,      "Email is required");}
    if (empty($Password)){array_push($errors,        "Password is required");}
    if (empty($Cpassword)){array_push($errors,       "Confirmed password is required");}

    //validate password and confirmed password are the same
    if ($Password != $Cpassword){array_push($errors,       "Passwords must match");}

    //validate that email is not already registered
    $params = array($EmailAddress); 

    if (!$result = sqlsrv_query($db, $check_email_query, $params))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    if (!is_null($row))
    {
        if (in_array($EmailAddress, $row)){array_push($errors, "Email address is already registered");}
    }

    /* REGISTER USER */

    if (count($errors) > 0)
        die(print_r($errors, true));

    else if(count($errors) == 0)
    {
        echo "going to insert";
        $params = array($FirstName, $MiddleInitial, $LastName, $Affiliation, $Department, $Address, $City, $State, $ZipCode, $PhoneNumber, $EmailAddress, $Password);

        //run query 
        if (!sqlsrv_query($db, $register_author, $params))
            die(print_r(sqlsrv_errors(), true));
        else
            echo "INSERTED ROW";
    }

    //log in the user on successful sign up
    $_SESSION["username"] = $EmailAddress;
    $_SESSION["success"] = "Logged In";
    header("Location: ../php/author-home.php");
}
//redirect to mainpage
else
{
    header("Location: ../php/mainpage.php");
    exit;
}

?>