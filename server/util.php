<?php

//connects to database
function connect_db()
{
    $serverName = "DESKTOP-FBQ4F42";
    $connectionInfo = array( "Database"=>"CPMS");
    static $con;

    if (is_null($con))
        $con = sqlsrv_connect($serverName, $connectionInfo);

    if ($con)
    {  
        return $con;
    }
    else
        die(print_r(sqlsrv_erros, true));
}

function is_email_registered($db, $EmailAddress)
{

    $check_email_query = "SELECT CPMS.dbo.Author.EmailAddress FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";

    $params = array($EmailAddress); 

    if (!$result = sqlsrv_query($db, $check_email_query, $params))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    if (!is_null($row))
    {
        if (in_array($EmailAddress, $row))
            return true;
    }
    else
        return false;
}

function validate_author($db, $EmailAddress)
{
    $check_user = "SELECT CPMS.dbo.Author.EmailAddress FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";
    
    $param = array($EmailAddress);

    if ((!$result = sqlsrv_query($db, $check_user, $param)))
    {
        die(print_r(sqlsrv_errors(), true));
    }
                        
    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    if (in_array($EmailAddress, $row))
    {
        $_SESSION["msg"] = "success";
        return;
    }

    else
    {
        header("Location: noaccess-login.php"); 
    }
}

function validate_reviewer($db, $EmailAddress)
{
    //find email in database
    $check_user = "SELECT CPMS.dbo.Reviewer.EmailAddress FROM CPMS.dbo.Reviewer WHERE CPMS.dbo.Reviewer.EmailAddress = ?";

    $param = array($EmailAddress);

    if ((!$result = sqlsrv_query($db, $check_user, $param)))
    {
        die(print_r(sqlsrv_errors(), true));
    }
                        
    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    if (in_array($EmailAddress, $row))
    {
        $_SESSION["msg"] = "success";
        return;
    }
    
    else
    {
        header("Location: noaccess-login.php"); 
    }
}


//retrieve author's first name
function get_author_first($db, $EmailAddress)
{
    $user_first_name = "SELECT CPMS.dbo.Author.FirstName FROM CPMS.dbo.Author WHERE CPMS.dbo.Author.EmailAddress = ?";

    if(!$result = sqlsrv_query($db, $user_first_name, array($EmailAddress)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    while ($row = sqlsrv_fetch_array($result, 2))
    {
            echo $row['FirstName'];
    }
}

//retrieve reviewers first name
function get_reviewer_first($db, $EmailAddress)
{
    $user_first_name = "SELECT CPMS.dbo.Reviewer.FirstName FROM CPMS.dbo.Reviewer WHERE CPMS.dbo.Reviewer.EmailAddress = ?";

    if(!$result = sqlsrv_query($db, $user_first_name, array($EmailAddress)))
    {
        die(print_r(sqlsrv_errors(), true));
    }

    while ($row = sqlsrv_fetch_array($result, 2))
    {
            echo $row['FirstName'];
    }
}

function modify_author($db, $EmailAddress, $column, $value)
{
    if ("" == trim($value))
        return;
        
    $sql = "UPDATE CPMS.dbo.Author SET CPMS.dbo.Author.";

    $sql .= $column;
    $sql .= " = '";
    $sql .= $value;
    $sql .= "'";
    $sql .= " WHERE CPMS.dbo.Author.EmailAddress = '";
    $sql .= $EmailAddress;
    $sql .= "'";
    
    
    if(!$result = sqlsrv_query($db, $sql))
    {
        die(print_r(sqlsrv_errors(), true));
    }  
}
?>


