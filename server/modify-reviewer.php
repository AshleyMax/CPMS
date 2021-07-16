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

    validate_reviewer($db, $EmailAddress);
}

//if page was accessed through submit button, process form
if (isset($_POST["modify-reviewer"]))
{
    //Update fields
    if (isset($_POST["RMFirstName"]) && !is_null($POST["RMFirstName"]))
    {
        $var1 = $_POST["RMFirstName"];
        modify_reviewer($db, $EmailAddress, "FirstName", $var1);
    }

    if (isset($_POST["RMMiddleInitial"]) && !is_null($POST["RMMiddleInitial"]))
    {
        $var2 = $_POST["RMMiddleInitial"];
        modify_reviewer($db, $EmailAddress, "MiddleInitial", $var2);
    }

    if (isset($_POST["RMLastName"]) && !is_null($POST["RMLastName"]))
    {
        $var3 = $_POST["RMLastName"];
        modify_reviewer($db, $EmailAddress, "LastName", $var3);
    }

    if (isset($_POST["RMAffiliation"]) && !is_null($POST["RMAffiliation"]))
    {
        $var4 = $_POST["RMAffiliation"];
        modify_reviewer($db, $EmailAddress, "Affiliation", $var4);
    }

    if (isset($_POST["RMDepartment"]) && !is_null($POST["RMDepartment"])) 
    {
        $var5 = $_POST["RMDepartment"];
        modify_reviewer($db, $EmailAddress, "Department", $var5);
    }

    if (isset($_POST["RMAddress"]) && !is_null($POST["RMAddress"]))
    {
        $var6 = $_POST["RMAddress"];
        modify_reviewer($db, $EmailAddress, "Address", $var6);
    }

    if (isset($_POST["RMCity"]) && !is_null($POST["City"]))
    {
        $var7 = $_POST["RMCity"];
        modify_reviewer($db, $EmailAddress, "City", $var7);
    }

    if (isset($_POST["RMState"]) && !is_null($POST["RMState"]))
    {
        $var8 = $_POST["RMState"];
        modify_reviewer($db, $EmailAddress, "State", $var8);
    }

    if (isset($_POST["RMZipCode"]) && !is_null($POST["RMZipCode"]))
    {
        $var9 = $_POST["RMZipCode"];
        modify_reviewer($db, $EmailAddress, "ZipCode", $var9);
    }

    if (isset($_POST["RMEmailAddress"]) && !is_null($POST["RMEmailAddress"]))
    { 
        $var10 = $_POST["RMEmailAddress"];
        if (!is_email_registered($db, $var10))
        {
            modify_reviewer($db, $EmailAddress, "EmailAddress", $var10);
        }
    }
     
    $_SESSION['message'] = "Account Updated";
    header("Location: ../php/myaccount-r.php");
}
//if page was not access through submit button, redirect
else
{
    header("Location: ../php/noaccess-login.php");
    exit;
}

?>