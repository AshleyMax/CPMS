<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/review-style.css" />
    
</head>

<body>
    <!-- Header-->
    <?php include '../inc/header-signedin.php';?>

    <box>
        <!-- Sidebar-->
        <sidebar>
            <button class="sidebar-btn">
                <img src="../img/icons8-person-50.png" />
                <br />My Account
            </button>

            <button class="sidebar-btn">
                <img src="../img/icons8-dashboard-50.png" />
                <br />Dashboard
            </button>


            <button class="sidebar-btn">
                <img src="../img/icons8-paper-50.png" />
                <br />
                Papers
            </button>

            <button class="sidebar-btn" onclick="OpenReviewForm()">
                <img src="../img/icons8-survey-50.png" />
                <br />
                Reviews
            </button>
        </sidebar>

        <!-- Review Form -->
        <review-form>
            <h1>CCSCMW Paper Review Form</h1>

            <h2> Reviewer Information</h2>
            <form action="/action_page.php">

                <label for="fname">First name: &ensp;&emsp;&emsp;</label>
                <input type="text" id="fname" name="fname" value="John"><br><br>

                <label for="midinit">Middle Initial: &nbsp;&emsp;</label>
                <input type="text" id="midinit" name="midinit" value="F"><br><br>

                <label for="lname">Last name:  &nbsp;&ensp;&emsp;&emsp;</label>
                <input type="text" id="lname" name="lname" value="Doe"><br><br>

                <h2>Paper Information</h2>

                <label for="title">Paper Title:</label>
                <input type="text" class="resized-title-text" id="title" name="title" value="Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit"><br><br>

                <h2>Content</h2>

                Appropriateness of Topic: &emsp;
                <input type="radio" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"> Poor
                <input type="radio" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"> Fair
                <input type="radio" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"> Average
                <input type="radio" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"> Good
                <input type="radio" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"> Excellent
                <br><br>

                Timeliness of Topic: &emsp; &emsp; &ensp;&nbsp;
                <input type="radio" id="TimelinessOfTopic" name="TimelinessOfTopic"> Poor
                <input type="radio" id="TimelinessOfTopic" name="TimelinessOfTopic"> Fair
                <input type="radio" id="TimelinessOfTopic" name="TimelinessOfTopic"> Average
                <input type="radio" id="TimelinessOfTopic" name="TimelinessOfTopic"> Good
                <input type="radio" id="TimelinessOfTopic" name="TimelinessOfTopic"> Excellent
                <br><br>

                Supportive Evidence: &emsp; &emsp;&nbsp;&nbsp;
                <input type="radio" id="SupportiveEvidence" name="SupportiveEvidence"> Poor
                <input type="radio" id="SupportiveEvidence" name="SupportiveEvidence"> Fair
                <input type="radio" id="SupportiveEvidence" name="SupportiveEvidence"> Average
                <input type="radio" id="SupportiveEvidence" name="SupportiveEvidence"> Good
                <input type="radio" id="SupportiveEvidence" name="SupportiveEvidence"> Excellent
                <br><br>

                Techincal Quality: &emsp;&emsp;&emsp;&emsp;
                <input type="radio" id="TechnicalQuality" name="TechnicalQuality"> Poor
                <input type="radio" id="TechnicalQuality" name="TechnicalQuality"> Fair
                <input type="radio" id="TechnicalQuality" name="TechnicalQuality"> Average
                <input type="radio" id="TechnicalQuality" name="TechnicalQuality"> Good
                <input type="radio" id="TechnicalQuality" name="TechnicalQuality"> Excellent
                <br><br>

                Scope of Coverage: &emsp;&emsp;&emsp;&ensp;
                <input type="radio" id="ScopeOfCoverage" name="ScopeOfCoverage"> Poor
                <input type="radio" id="ScopeOfCoverage" name="ScopeOfCoverage"> Fair
                <input type="radio" id="ScopeOfCoverage" name="ScopeOfCoverage"> Average
                <input type="radio" id="ScopeOfCoverage" name="ScopeOfCoverage"> Good
                <input type="radio" id="ScopeOfCoverage" name="ScopeOfCoverage"> Excellent
                <br><br>

                Citation of Previous Work: &ensp;
                <input type="radio" id="CitationOfPreviousWork" name="CitationOfPreviousWork"> Poor
                <input type="radio" id="CitationOfPreviousWork" name="CitationOfPreviousWork"> Fair
                <input type="radio" id="CitationOfPreviousWork" name="CitationOfPreviousWork"> Average
                <input type="radio" id="CitationOfPreviousWork" name="CitationOfPreviousWork"> Good
                <input type="radio" id="CitationOfPreviousWork" name="CitationOfPreviousWork"> Excellent
                <br><br>

                Originality: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                <input type="radio" id="Originality" name="Originality"> Poor
                <input type="radio" id="Originality" name="Originality"> Fair
                <input type="radio" id="Originality" name="Originality"> Average
                <input type="radio" id="Originality" name="Originality"> Good
                <input type="radio" id="Originality" name="Originality"> Excellent
                <br><br>

                Comments:
                <br><br>
                <input type="text" class="resized-text" id="ContentComments" name="ContentComments"><br><br>

                <h2>Written Document</h2>
                Organization of Paper: &emsp;&emsp;&nbsp;
                <input type="radio" id="OrganizationOfPaper" name="OrganizationOfPaper"> Poor
                <input type="radio" id="OrganizationOfPaper" name="OrganizationOfPaper"> Fair
                <input type="radio" id="OrganizationOfPaper" name="OrganizationOfPaper"> Average
                <input type="radio" id="OrganizationOfPaper" name="OrganizationOfPaper"> Good
                <input type="radio" id="OrganizationOfPaper" name="OrganizationOfPaper"> Excellent
                <br><br>

                Clarity of Main Message: &emsp;
                <input type="radio" id="ClarityOfMainMessage" name="ClarityOfMainMessage"> Poor
                <input type="radio" id="ClarityOfMainMessage" name="ClarityOfMainMessage"> Fair
                <input type="radio" id="ClarityOfMainMessage" name="ClarityOfMainMessage"> Average
                <input type="radio" id="ClarityOfMainMessage" name="ClarityOfMainMessage"> Good
                <input type="radio" id="ClarityOfMainMessage" name="ClarityOfMainMessage"> Excellent
                <br><br>

                Mechanics: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                <input type="radio" id="Mechanics" name="Mechanics"> Poor
                <input type="radio" id="Mechanics" name="Mechanics"> Fair
                <input type="radio" id="Mechanics" name="Mechanics"> Average
                <input type="radio" id="Mechanics" name="Mechanics"> Good
                <input type="radio" id="Mechanics" name="Mechanics"> Excellent
                <br><br>


                Comments:
                <br><br>
                <input type="text" class="resized-text" id="WrittenDocumentComments" name="WrittenDocumentComments"><br><br>

                <h2>Potential for Oral Presentation</h2>
                Suitability for Presentation: &emsp;
                <input type="radio" id="SuitabilityForPresentation" name="SuitabilityForPresentation"> Poor
                <input type="radio" id="SuitabilityForPresentation" name="SuitabilityForPresentation"> Fair
                <input type="radio" id="SuitabilityForPresentation" name="SuitabilityForPresentation"> Average
                <input type="radio" id="SuitabilityForPresentation" name="SuitabilityForPresentation"> Good
                <input type="radio" id="SuitabilityForPresentation" name="SuitabilityForPresentation"> Excellent
                <br><br>

                Potential Interest in Topic: &emsp;&ensp;
                <input type="radio" id="PotentialInterestInTopic" name="PotentialInterestInTopic"> Poor
                <input type="radio" id="PotentialInterestInTopic" name="PotentialInterestInTopic"> Fair
                <input type="radio" id="PotentialInterestInTopic" name="PotentialInterestInTopic"> Average
                <input type="radio" id="PotentialInterestInTopic" name="PotentialInterestInTopic"> Good
                <input type="radio" id="PotentialInterestInTopic" name="PotentialInterestInTopic"> Excellent
                <br><br>

                Comments:
                <br><br>
                <input type="text" class="resized-text" id="PotentialForOralPresentationComments" name="PotentialForOralPresentationComments">
                <br><br>


                <h2>Overall Rating</h2>
                <input type="radio" id="OverallRating" name="OverallRating">Definitely Should Not Accept Paper<br>
                <input type="radio" id="OverallRating" name="OverallRating">Probably Should Not Accept Paper<br>
                <input type="radio" id="OverallRating" name="OverallRating">Uncertain About Acceptance of Paper<br>
                <input type="radio" id="OverallRating" name="OverallRating">Probably Should Accept Paper<br>
                <input type="radio" id="OverallRating" name="OverallRating">Definitely Should Accept Paper<br><br>

                Comments:
                <br><br>
                <input type="text" class="resized-text" id="OverallComments" name="OverallComments">
                <br><br>

                <input type="submit" value="Submit">
            </form>

        </review-form>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>