<?php
include "util.php";

session_start();

if (isset($_POST["main-login"]))
{
    //Establish database connection
    $db = connect_db();

    //get entered login info
    $user = $_POST["email"];
    $pass = $_POST["psw"];


    //initialize queries
    $sql1 = "SELECT CPMS.dbo.Author.EmailAddress FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";
    $sql2 = "SELECT * FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ? AND CPMS.dbo.Author.Password = ?"; //this q returns null when user and password do not match

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

    //if(!is_null($row1)) echo $row1["EmailAddress"];
    //if(!is_null($row2)) echo $row2["EmailAddress"];
    //if(!is_null($row3)) echo $row3["EmailAddress"];
    //if(!is_null($row4)) echo $row4["EmailAddress"];

    switch ($user)
    {
        //process as author
        case $row1["EmailAddress"]:
            {
                if (!is_null($row2))
                {
                    if ($user === $row2["EmailAddress"] && $pass === $row2["Password"])
                    {
                        $_SESSION["success"] = "Logged in";
                        $_SESSION["username"] = $user;
                        $_SESSION["message"] = "Successfully logged in";

                        header("Location: ../php/author-home.php");
                        exit;
                    }
                }
                //credentials do not match
                else
                {
                    $S_SESSION["message"] = "Invalid Credentials.";

                    header("Location: ../php/mainpage.php");
                    exit;
                }

                break;
            }//end case
                
        //process as reviewer
        case $row3["EmailAddress"]:
            {
                if (!is_null($row4))
                {
                    if ($user === $row4["EmailAddress"] && $pass === $row4["Password"])
                    {
                        $_SESSION["success"] = "Logged in";
                        $_SESSION["username"] = $user;
                        $_SESSION["message"] = "Successfully logged in";

                        header("Location: ../php/reviewer-home.php");
                        exit;
                    }
                }
                //credentials do not match
                else
                {
                    $S_SESSION["message"] = "Invalid Credentials";
                    header("Location: ../php/mainpage.php");
                    exit;
                }

                break;
            }//end case

        //email not registered
        default:
        {
            $_SESSION["message"] = "Email is not registered. Please sign up!";
            header("Location: ../php/mainpage.php");
            exit;
        }
    }//end switch
 }

 else
 {
     $_SESSION["message"] = "Invalid Access. Login in through our main page.";
     header("Location: ../php/mainpage.php");
     exit;

 }
?>