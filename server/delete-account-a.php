<?php
include "util.php";

session_start();

//if script is accessed from account's delete button
if (isset($_POST["delete-account-button"]))
{
    if(!isset($_SESSION["username"]))
    {
        $_SESSION["msg"] = "You must be logged in to view this page.";
        header("Location: noaccess-login.php");
    }


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


    $query = "DELETE FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ? ";

    //if query fails
    if (!sqlsrv_query($db, $query, array($EmailAddress)))
    {
        $_SESSION["message"] = "An error occured while attemping to delete your account.
                                Please contact an adminstrator for help.";

        header("Location: ../php/mainpage.php");
         exit;
    }
    //successful delete
    else
    {
        unset($_SESSION["username"]);
        unset($_SESSION["success"]);

        $_SESSION["message"] = "Account successfully deleted";
        header("Location: ../php/mainpage.php");
    } 
}
//script not accessed from account's delete button
else
{
    header("Location: ../php/noaccess-login.php");
    exit;
}

?>