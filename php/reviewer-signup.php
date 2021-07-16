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
            <h2>Reviewer Signup</h2>

            <form action="../server/process-reviewer-signup.php" class="form-container" method="post" name="reviewer-signup-form">

                <h4>Fields labeled with an asterisk * are required.</h4>
         
                 <!-- Personal Info -->
                <h3>Personal Information</h3>

                <label for="FirstName"><b>First Name*</b></label>
                <input type="text" placeholder="Enter First Name" maxlength="50"  name="FirstName" required>

                <label for="MiddleInitial"><b>Middle Initial</b></label>
                <input type="text" placeholder="" maxlength="1" name="MiddleInitial">

                <label for="LastName"><b>Last Name*</b></label>
                <input type="text" placeholder="Enter Last Name" maxlength="50" name="LastName" required>

                <label for="Affiliation"><b>Affiliation*</b></label>
                <input type="text" placeholder="Enter Affiliation" maxlength="50" name="Affiliation" required>

                <label for="Department"><b>Department*</b></label>
                <input type="text" placeholder="Enter Department" maxlength="50" name="Department" required>

                <label for="Address"><b>Street Address*</b></label>
                <input type="text" placeholder="Enter Street Address" maxlength="50" name="Address" required>

                <label for="City"><b>City*</b></label>
                <input type="text" placeholder="Enter City" maxlength="50" name="City" required>

                <label for="State"><b>State*</b></label>
                <input type="text" placeholder="Enter State" maxlength="2" name="State" required>

                <label for="ZipCode"><b>ZipCode*</b></label>
                <input type="text" placeholder="Enter ZipCode" maxlength="10" name="ZipCode" required>

                <label for="PhoneNumber"><b>Phone*</b></label>
                <input type="text" placeholder="Enter Phone Number" maxlength="50" name="PhoneNumber" required>

                <label for="EmailAddress"><b>Email*</b></label>
                <input type="text" placeholder="Enter Email" maxlength="100"name="EmailAddress" required>

                <!-- Password & Confirmation -->

                <label for="Password"><b>Create a Password*</b></label>
                <input type="password" placeholder="Enter Password" maxlength="5" name="Password" required>

                <label for="Cpassword"><b>Confirm Password*</b></label>
                <input type="password" placeholder="Confirm Password" maxlength="5" name="Cpassword" required>


                <!-- Topics of Interest  -->
                <h3>Topic Interests</h3>

                <input type="checkbox" id="AnalysisOfAlgorithms" name="analysisOfAlgorithms" value="1">
                <label for="AnalysisOfAlgorithms">Analysis of Algorithms</label><br />

                <input type="checkbox" id="Applications" name="Applications" value="1">
                <label for="Applications">Applications</label><br />

                <input type="checkbox" id="Architecture" name="Architecture" value="1">
                <label for="architecture">Architecture</label><br />

                <input type="checkbox" id="ArtificialIntelligence" name="ArtificialIntelligence" value="1">
                <label for="ArtificialIntelligence">Artificial Intelligence</label><br />

                <input type="checkbox" id="ComputerEngineering" name="ComputerEngineering" value="1">
                <label for="ComputerEngineering">Computer Engineering</label><br />

                <input type="checkbox" id="Curriculum" name="Curriculum" value="1">
                <label for="Curriculum">Curriculum</label><br />

                <input type="checkbox" id="DataStructures" name="DataStructures" value="1">
                <label for="DataStructures">Data Structures</label><br />

                <input type="checkbox" id="Databases" name="Databases" value="1">
                <label for="Databases">Databases</label><br />

                <input type="checkbox" id="DistancedLearning" name="DistancedLearning" value="1">
                <label for="distancedLearning">Distanced Learning</label><br />

                <input type="checkbox" id="DistributedSystems" name="DistributedSystems" value="1">
                <label for="DistributedSystems">Distributed Systems</label><br />

                <input type="checkbox" id="EthicalSocietalIssues" name="EthicalSocietalIssues" value="1">
                <label for="EthicalSocietalIssues">Ethical Societal Issues</label><br />

                <input type="checkbox" id="FirstYearComputing" name="FirstYearComputing" value="1">
                <label for="FirstYearComputing">First Year Computing</label><br />

                <input type="checkbox" id="GenderIssues" name="GenderIssues" value="1">
                <label for="GenderIssues">Gender Issues</label><br />

                <input type="checkbox" id="GrantWriting" name="GrantWriting" value="1">
                <label for="GrantWriting">Grant Writing</label><br />

                <input type="checkbox" id="GraphicsImageProcessing" name="GraphicsImageProcessing" value="1">
                <label for="GraphicsImageProcessing">Graphics Image Processing</label><br />

                <input type="checkbox" id="HumanComputerInteraction" name="HumanComputerInteraction" value="1">
                <label for="HumanComputerInteraction">Human Computer Interaction</label><br />

                <input type="checkbox" id="LaboratoryEnvironments" name="LaboratoryEnvironments" value="1">
                <label for="LaboratoryEnvironments">Laboratory Environments</label><br />

                <input type="checkbox" id="Literacy" name="Literacy" value="1">
                <label for="Literacy">Literacy</label><br />

                <input type="checkbox" id="MathematicsInComputing" name="MathematicsInComputing" value="1">
                <label for="MathematicsInComputing">Mathematics In Computing</label><br />

                <input type="checkbox" id="Multimedia" name="Multimedia" value="1">
                <label for="Multimedia">Multimedia</label><br />

                <input type="checkbox" id="NetworkingDataCommunications" name="NetworkingDataCommunications" value="1">
                <label for="NetworkingDataCommunications">Networking Data Communications</label><br />

                <input type="checkbox" id="NonMajorCourses" name="NonMajorCourses" value="1">
                <label for="NonMajorCourses">Non-Major Courses</label><br />

                <input type="checkbox" id="ObjectOrientedIssues" name="ObjectOrientedIssues" value="1">
                <label for="ObjectOrientedIssues">Object Oriented Issues</label><br />

                <input type="checkbox" id="OperatingSystems" name="OperatingSystems" value="1">
                <label for="OperatingSystems">Operating Systems</label><br />

                <input type="checkbox" id="ParallelProcessing" name="ParallelProcessing" value="1">
                <label for="ParallelProcessing">Parallel Processing</label><br />

                <input type="checkbox" id="Pedagogy" name="Pedagogy" value="1">
                <label for="Pedagogy">Pedagogy</label><br />

                <input type="checkbox" id="ProgrammingLanguages" name="ProgrammingLanguages" value="1">
                <label for="ProgrammingLanguages">Programming Languages</label><br />

                <input type="checkbox" id="Research" name="Research" value="1">
                <label for="Research">Research</label><br />

                <input type="checkbox" id="Security" name="Security" value="1">
                <label for="Security">Security</label><br />

                <input type="checkbox" id="SoftwareEngineering" name="SoftwareEngineering" value="1">
                <label for="SoftwareEngineering">Software Engineering</label><br />

                <input type="checkbox" id="SystemsAnalysisAndDesign" name="SystemsAnalysisAndDesign" value="1">
                <label for="SystemsAnalysisAndDesign">Systems Analysis and Design</label><br />

                <input type="checkbox" id="UsingTechnologyInTheClassroom" name="UsingTechnologyInTheClassroom" value="1">
                <label for="UsingTechnologyInTheClassroom">Using Technology in the Classroom</label><br />

                <input type="checkbox" id="WebAndInternetProgramming" name="WebAndInternetProgramming" value="1">
                <label for="WebAndInternetProgramming">Web and Internet Programming</label><br />

                <input type="checkbox" id="Other" name="Other" value="1">
                <label for="Other">Other</label>

                <input type="text" placeholder="Other Description" name="OtherDescription">

                <br /><br />
                <button type="submit" class="btn" name="reviewer-submit">Sign Up</button>
            </form>
        </panel>
    </box>
    <?php include '../inc/footer.php';?>
</body>
</html>