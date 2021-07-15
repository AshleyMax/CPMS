<?php 
if (isset($_POST["reviewer-submit"]))
{
    //*initialize session
    session_start();

    //query definitions
    $check_email_query = "SELECT CPMS.dbo.Reviewer.EmailAddress FROM CPMS.dbo.Reviewer WHERE CPMS.dbo.Reviewer.EmailAddress = ?";

    $register_reviewer = "INSERT INTO CPMS.dbo.Reviewer (CPMS.dbo.Reviewer.Active,
                                                   CPMS.dbo.Reviewer.FirstName, 
                                                   CPMS.dbo.Reviewer.MiddleInitial, 
                                                   CPMS.dbo.Reviewer.LastName, 
                                                   CPMS.dbo.Reviewer.Affiliation, 
                                                   CPMS.dbo.Reviewer.Department, 
                                                   CPMS.dbo.Reviewer.Address, 
                                                   CPMS.dbo.Reviewer.City, 
                                                   CPMS.dbo.Reviewer.State, 
                                                   CPMS.dbo.Reviewer.ZipCode, 
                                                   CPMS.dbo.Reviewer.PhoneNumber, 
                                                   CPMS.dbo.Reviewer.EmailAddress, 
                                                   CPMS.dbo.Reviewer.Password,
                                                   CPMS.dbo.Reviewer.AnalysisOfAlgorithms,
                                                   CPMS.dbo.Reviewer.Applications,
                                                   CPMS.dbo.Reviewer.Architecture,
                                                   CPMS.dbo.Reviewer.ArtificialIntelligence,
                                                   CPMS.dbo.Reviewer.ComputerEngineering,
                                                   CPMS.dbo.Reviewer.Curriculum,
                                                   CPMS.dbo.Reviewer.DataStructures,
                                                   CPMS.dbo.Reviewer.Databases,
                                                   CPMS.dbo.Reviewer.DistancedLearning,
                                                   CPMS.dbo.Reviewer.DistributedSystems,
                                                   CPMS.dbo.Reviewer.EthicalSocietalIssues,
                                                   CPMS.dbo.Reviewer.FirstYearComputing,
                                                   CPMS.dbo.Reviewer.GenderIssues,
                                                   CPMS.dbo.Reviewer.GrantWriting,
                                                   CPMS.dbo.Reviewer.GraphicsImageProcessing,
                                                   CPMS.dbo.Reviewer.HumanComputerInteraction,
                                                   CPMS.dbo.Reviewer.LaboratoryEnvironments,
                                                   CPMS.dbo.Reviewer.Literacy,
                                                   CPMS.dbo.Reviewer.MathematicsInComputing,
                                                   CPMS.dbo.Reviewer.Multimedia,
                                                   CPMS.dbo.Reviewer.NetworkingDataCommunications,
                                                   CPMS.dbo.Reviewer.NonMajorCourses,
                                                   CPMS.dbo.Reviewer.ObjectOrientedIssues,
                                                   CPMS.dbo.Reviewer.OperatingSystems,
                                                   CPMS.dbo.Reviewer.ParallelProcessing,
                                                   CPMS.dbo.Reviewer.Pedagogy,
                                                   CPMS.dbo.Reviewer.ProgrammingLanguages,
                                                   CPMS.dbo.Reviewer.Research,
                                                   CPMS.dbo.Reviewer.Security,
                                                   CPMS.dbo.Reviewer.SoftwareEngineering,
                                                   CPMS.dbo.Reviewer.SystemsAnalysisAndDesign,
                                                   CPMS.dbo.Reviewer.UsingTechnologyInTheClassroom,
                                                   CPMS.dbo.Reviewer.WebAndInternetProgramming,
                                                   CPMS.dbo.Reviewer.Other,
                                                   CPMS.dbo.Reviewer.OtherDescription,
                                                   CPMS.dbo.Reviewer.ReviewsAcknowledged)
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    //initialize database connection info
    $serverName = "DESKTOP-FBQ4F42";
    $connectionInfo = array("Database"=>"CPMS");

    //initilize arrays - errors tracks form input errors
    $errors = array();

    //initialize middleinital in case of null value
    $MiddleInitial = '';

    //initialize variables for bit attributes 
    $Active = $ReviewsAcknowledged = 1;
    $AnalysisOfAlgorithms = 
    $Application = 
    $Architecture = 
    $ArtificialIntelligence = 
    $ComputerEngineering = 
    $Curriculum = 
    $DataStructures = 
    $Databases = 
    $DistancedLearning = 
    $DistributedSystems = 
    $EthicalSocietalIssues = 
    $FirstYearComputing = 
    $GenderIssues = 
    $GrantWriting = 
    $GraphicsImageProcessing = 
    $HumanComputerInteraction = 
    $LaboratoryEnvironments = 
    $Literacy = 
    $MathematicsInComputing = 
    $Multimedia = 
    $NetworkingDataCommunications = 
    $NonMajorCourses = 
    $ObjectOrientedIssues = 
    $OperatingSystems = 
    $ParallelProcessing = 
    $Pedagogy = 
    $ProgrammingLanguages = 
    $Research = 
    $Security = 
    $SoftwareEngineering = 
    $SystemsAnalysisAndDesign = 
    $UsingTechnologyInTheClassroom = 
    $WebAndInternetProgramming = 
    $Other = 
    $ReviewsAcknowledged = "False";

    //establish and check connection 
    $db = sqlsrv_connect($serverName, $connectionInfo);
    if ($db) 
        echo "Connection established.<br />";
    else
        die( print_r( qlsrv_errors(), true));


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

    //topics of interest
    if (isset($_POST["AnalysisOfAlgorithms"]) && $_POST["AnalysisOfAlgorithms"] == "1") 
        $AnalysisOfAlgorithms = "True";

    if (isset($_POST["Applications"]) && $_POST["Applications"] == "1")
        $Applications = "True";

    if (isset($_POST["Architecture"]) && $_POST["Architecture"] == "1")
        $Architecture = "True";

    if (isset($_POST["ArtificialIntelligence"]) && $_POST["ArtificialIntelligence"] == "1")
        $ArtificialIntelligence = "True";

    if (isset($_POST["ComputerEngineering"]) && $_POST["ComputerEngineering"] == "1")
        $ComputerEngineering = "True";

    if (isset($_POST["Curriculum"]) && $_POST["Curriculum"] == "1")
        $Curriculum = "True";

    if (isset($_POST["DataStructures"]) && $_POST["DataStructures"] == "1")
        $DataStructures  = "True";

    if (isset($_POST["Databases"]) && $_POST["Databases"] == "1")
        $Databases = "True";

    if (isset($_POST["DistancedLearning"]) && $_POST["DistancedLearning"] == "1")
        $DistancedLearning = "True";

    if (isset($_POST["DistributedSystems"]) && $_POST["DistributedSystems"] == "1")
        $DistributedSystems = "True";

    if (isset($_POST["EthicalSocietalIssues"]) && $_POST["EthicalSocietalIssues"] == "1")
        $EthicalSocietalIssues = "True";

    if (isset($_POST["FirstYearComputing"]) && $_POST["FirstYearComputing"] == "1")
        $FirstYearComputing = "True";

    if (isset($_POST["GenderIssues"]) && $_POST["GenderIssues"] == "1")
        $GenderIssues = "True";

    if (isset($_POST["GrantWriting"]) && $_POST["GrantWriting"] == "1")
        $GrantWriting = "True";

    if (isset($_POST["GraphicsImageProcessing"]) && $_POST["GraphicsImageProcessing"] == "1")
        $GraphicsImageProcessing = "True";

    if (isset($_POST["HumanComputerInteraction"]) && $_POST["HumanComputerInteraction"] == "1")
        $HumanComputerInteraction = "True";

    if (isset($_POST["LaboratoryEnvironments"]) && $_POST["LaboratoryEnvironments"] == "1")
        $LaboratoryEnvironments = "True";

    if (isset($_POST["Literacy"]) && $_POST["Literacy"] == "1")
        $Literacy = "True";

    if (isset($_POST["MathematicsInComputing"]) && $_POST["MathematicsInComputing"] == "1")
        $MathematicsInComputing = "True";

    if ((isset($_POST["Multimedia"])) && ($_POST["Multimedia"] == "1"))
        $Multimedia = "True";

    if (isset($_POST["NetworkingDataCommunications"]) && $_POST["NetworkingDataCommunications"] == "1")
        $NetworkingDataCommunications = "True";

    if (isset($_POST["NonMajorCourses"]) && $_POST["NonMajorCourses"] == "1")
        $NonMajorCourses = "True";

    if (isset($_POST["ObjectOrientedIssues"]) && $_POST["ObjectOrientedIssues"] == "1")
        $ObjectOrientedIssues = "True";

    if (isset($_POST["OperatingSystems"]) && $_POST["OperatingSystems"] == "1")
        $OperatingSystems = "True";

    if (isset($_POST["ParallelProcessing"]) && $_POST["ParallelProcessing"] == "1")
        $ParallelProcessing = "True";

    if (isset($_POST["Pedagogy"]) && $_POST["Pedagogy"] == "1")
        $Pedagogy = "True";

    if (isset($_POST["ProgrammingLanguages"]) && $_POST["ProgrammingLanguages"] == "1")
        $ProgrammingLanguages = "True";

    if (isset($_POST["Research"]) && $_POST["Research"] == "1")
        $Research = "True";

    if (isset($_POST["Security"]) && $_POST["Security"] == "1")
        $Security = "True"; 

    if (isset($_POST["SoftwareEngineering"]) && $_POST["SoftwareEngineering"] == "1")
        $SoftwareEngineering = "True";

    if (isset($_POST["SystemsAnalysisAndDesign"]) && $_POST["SystemsAnalysisAndDesign"] == "1")
        $SystemsAnalysisAndDesign = "True";

    if (isset($_POST["UsingTechnologyInTheClassroom"]) && $_POST["UsingTechnologyInTheClassroom"] == "1")
        $UsingTechnologyInTheClassroom = "True";

    if (isset($_POST["WebAndInternetProgramming"]) && $_POST["WebAndInternetProgramming"] == "1")
        $WebAndInternetProgramming = "True";

    if (isset($_POST["Other"]) && $_POST["Other"] == "1")
        $Other = "True";

    $OtherDescription = $_POST["OtherDescription"];


    /* FORM VALIDATION */

    //Required fields cannot be empty
    if (empty($FirstName)){array_push($errors,      "First name is required");}
    if (empty($LastName)){array_push($errors,       "Last name is required");}
    if (empty($Affiliation)){array_push($errors,    "Affiliation is required");}
    if (empty($Department)){array_push($errors,     "Department is required");}
    if (empty($Address)){array_push($errors,        "Address is required");}
    if (empty($City)){array_push($errors,           "City is required");}
    if (empty($State)){array_push($errors,          "State is required");}
    if (empty($ZipCode)){array_push($errors,        "Zipcode is required");}
    if (empty($PhoneNumber)){array_push($errors,          "Phone is required");}
    if (empty($EmailAddress)){array_push($errors,          "Email is required");}
    if (empty($Password)){array_push($errors,       "Password is required");}
    if (empty($Cpassword)){array_push($errors,      "Confirmed password is required");}

    //validate password and confirmed password are the same
    if ($Password != $Cpassword){array_push($errors, "Passwords must match");}

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
        $params = array($Active, 
                        $FirstName, 
                        $MiddleInitial, 
                        $LastName, 
                        $Affiliation, 
                        $Department, 
                        $Address, 
                        $City, 
                        $State, 
                        $ZipCode, 
                        $PhoneNumber, 
                        $EmailAddress, 
                        $Password,
                        $AnalysisOfAlgorithms,
                        $Application,
                        $Architecture,
                        $ArtificialIntelligence,
                        $ComputerEngineering, 
                        $Curriculum, 
                        $DataStructures, 
                        $Databases,
                        $DistancedLearning,
                        $DistributedSystems,
                        $EthicalSocietalIssues, 
                        $FirstYearComputing, 
                        $GenderIssues,
                        $GrantWriting,
                        $GraphicsImageProcessing,
                        $HumanComputerInteraction,
                        $LaboratoryEnvironments,
                        $Literacy,
                        $MathematicsInComputing,
                        $Multimedia,
                        $NetworkingDataCommunications,
                        $NonMajorCourses,
                        $ObjectOrientedIssues,
                        $OperatingSystems,
                        $ParallelProcessing,
                        $Pedagogy,
                        $ProgrammingLanguages,
                        $Research,
                        $Security,
                        $SoftwareEngineering,
                        $SystemsAnalysisAndDesign,
                        $UsingTechnologyInTheClassroom,
                        $WebAndInternetProgramming,
                        $Other,
                        $OtherDescription,
                        $ReviewsAcknowledged);

        //run query 
        if(!sqlsrv_query($db, $register_reviewer, $params))
            die(print_r(sqlsrv_errors(), true));
    }

    //log in the user on successful sign up
    $_SESSION["username"] = $EmailAddress;
    $_SESSION["success"] = "Logged In";
    header("Location: ../php/reviewer-home.php");
}

//redirect to homepage
else
{
    header("Location: ../html/mainpage.php");
}

?>