<?php
include 'util.php';
session_start();
//if page was accessed through submit button, process form
if (isset($_POST["modify-author"]))
{
    $db = connect_db();

    $EmailAddress = $_SESSION["username"];

    //Update fields
    if (isset($_POST["AMFirstName"]))
    {
        echo "1";
        $var1 = $_POST["AMFirstName"];
        $var = modify_author($db, $EmailAddress, "FirstName", $var1);
    }

    if (isset($_POST["AMMiddleInitial"]))
    {
        echo "2";
        $var2 = $_POST["AMMiddleInitial"];
        modify_author($db, $EmailAddress, "MiddleInitial", $var2);
    }

    if (isset($_POST["AMLastName"]))
    {
        echo "3";
        $var3 = $_POST["AMLastName"];
        modify_author($db, $EmailAddress, "LastName", $var3);
    }

    if (isset($_POST["AMAffiliation"]))
    {
        echo "4";
        $var4 = $_POST["AMAffiliation"];
        modify_author($db, $EmailAddress, "Affiliation", $var4);
    }

    if (isset($_POST["AMDepartment"]))
    {
        echo "5";
        $var5 = $_POST["AMDepartment"];
        modify_author($db, $EmailAddress, "Department", $var5);
    }

    if (isset($_POST["AMAddress"]))
    {
        echo "6";
        $var6 = $_POST["AMAddress"];
        modify_author($db, $EmailAddress, "Address", $var6);
    }

    if (isset($_POST["AMCity"]))
    {
        echo "7";
        $var7 = $_POST["AMCity"];
        modify_author($db, $EmailAddress, "City", $var7);
    }

    if (isset($_POST["AMState"]))
    {
        echo "8";
        $var8 = $_POST["AMState"];
        modify_author($db, $EmailAddress, "State", $var8);
    }

    if (isset($_POST["AMZipCode"]))
    {
        $var9 = $_POST["AMZipCode"];
        modify_author($db, $EmailAddress, "ZipCode", $var9);
    }

    if (isset($_POST["AMEmailAddress"]))
    { 
        $var10 = $_POST["AMEmailAddress"];
        if (!is_email_registered($db, $var10))
        {
            modify_author($db, $EmailAddress, "EmailAddress", $var10);
        }
    }
     
}
//if page was not access through submit button, redirect
else
{
    header("Location: ../php/noaccess-login.php");
    exit;
}

?>