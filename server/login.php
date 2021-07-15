<?php
include "util.php";

session_start();

if (!isset($_POST["main-login"]))
{
    //Establish database connection
    $db = connect_db();

    //get entered login info
    $user = $_POST["email"];
    $pass = $_POST["psw"];


    //initialize queries
    $sql1 = "SELECT CPMS.dbo.Author.EmailAddress FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";
    $sql2 = "SELECT * FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ? AND CPMS.dbo.Author.Password = ?";

    $sql3 = "SELECT CPMS.dbo.Reviewer.EmailAddress FROM CPMS.dbo.Reviewer WHERE CPMS.dbo.Reviewer.EmailAddress = ?";
    $sql4 = "SELECT * FROM CPMS.dbo.Reviewer WHERE CPMS.dbo.Reviewer.EmailAddress = ? AND CPMS.dbo.Reviewer.Password = ?";

    //execute queries
    if(!$result1 = sqlsrv_query($db, $sql1, array($user)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    if(!$result2 = sqlsrv_query($db, $sql2, array($user, $pass)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    if(!$result3 = sqlsrv_query($db, $sql3, array($user)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    if(!$result4 = sqlsrv_query($db, $sql4, array($user, $pass)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    //fetch result arrays
    $row1 = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC);
    $row2 = sqlsrv_fetch_array($result2, SQLSRV_FETCH_ASSOC);
    $row3 = sqlsrv_fetch_array($result3, SQLSRV_FETCH_ASSOC);
    $row4 = sqlsrv_fetch_array($result4, SQLSRV_FETCH_ASSOC);


    //if user is found author
    if($user == $row1["EmailAddress"])
    {   
        //check password
        if ($user == $_row2["EmailAddress"] && $pass == $row2["Password"])
        {
            $_SESSION["success"] = "Logged in";
            $_SESSION["username"] = $user;
            header("Location: ../php/author-home.php");
            exit;
        }

        //redirect to mainpage if pass is incorrect
        else
        {   
            $S_SESSION["message"] = "Invalid Credentials.";
            header("Location: ../html/report-page.html");
            exit;
        }
    }
    //if user is found reviewer
    else if($user == $row3["EmailAddress"])
    {
        //check password
        if($user == $row4["EmailAddress"] && $pass ==  $row4["Password"])
        {
            $_SESSION["success"] = "Logged in";
            $_SESSION["username"] = $user;
            header("Location: ../php/reviewer-home.php");
            exit;
        }
        else
        {
            $S_SESSION["message"] = "Invalid Credentials";
            header("Location: ../php/mainpage.php");
            exit;
        }
    }

    //email not found
    else
        {
            $_SESSION["message"] = "Email is not registered. Please sign up!";
            header("Location: ../php/mainpage.php");
            exit;
        }
}
else
{
    $_SESSION["message"] = "Please sign in through our main page";
    header("Location: ../php/mainpage.php");
   exit;
}

?>