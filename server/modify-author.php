<?php
include 'util.php';
session_start();

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

//if page was accessed through submit button, process form
if (isset($_POST["modify-author"]))
{
    //Update fields
    if (isset($_POST["AMFirstName"]) && !is_null($POST["AMFirstName"]))
    {
        $var1 = $_POST["AMFirstName"];
        modify_author($db, $EmailAddress, "FirstName", $var1);
    }

    if (isset($_POST["AMMiddleInitial"]) && !is_null($POST["AMMiddleInitial"]))
    {
        $var2 = $_POST["AMMiddleInitial"];
        modify_author($db, $EmailAddress, "MiddleInitial", $var2);
    }

    if (isset($_POST["AMLastName"]) && !is_null($POST["AMLastName"]))
    {
        $var3 = $_POST["AMLastName"];
        modify_author($db, $EmailAddress, "LastName", $var3);
    }

    if (isset($_POST["AMAffiliation"]) && !is_null($POST["AMAffiliation"]))
    {
        $var4 = $_POST["AMAffiliation"];
        modify_author($db, $EmailAddress, "Affiliation", $var4);
    }

    if (isset($_POST["AMDepartment"]) && !is_null($POST["AMDepartment"]))
    {
        $var5 = $_POST["AMDepartment"];
        modify_author($db, $EmailAddress, "Department", $var5);
    }

    if (isset($_POST["AMAddress"]) && !is_null($POST["AMAddress"]))
    {
        $var6 = $_POST["AMAddress"];
        modify_author($db, $EmailAddress, "Address", $var6);
    }

    if (isset($_POST["AMCity"]) && !is_null($POST["AMCity"]))
    {
        $var7 = $_POST["AMCity"];
        modify_author($db, $EmailAddress, "City", $var7);
    }

    if (isset($_POST["AMState"]) && !is_null($POST["AMState"]))
    {
        $var8 = $_POST["AMState"];
        modify_author($db, $EmailAddress, "State", $var8);
    }

    if (isset($_POST["AMZipCode"]) && !is_null($POST["AMZipCode"]))
    {
        $var9 = $_POST["AMZipCode"];
        modify_author($db, $EmailAddress, "ZipCode", $var9);
    }

    if (isset($_POST["AMEmailAddress"]) && !is_null($POST["AMEmailAddress"]))
    { 
        $var10 = $_POST["AMEmailAddress"];
        if (!is_email_registered($db, $var10))
        {
            modify_author($db, $EmailAddress, "EmailAddress", $var10);
        }
    }
     
    $_SESSION['message'] = "Account Updated";
    header("Location: ../php/myaccount-a.php");
}
//if page was not access through submit button, redirect
else
{
    header("Location: ../php/noaccess-login.php");
    exit;
}

?>