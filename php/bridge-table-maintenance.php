<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/bridge-table-maintenance-style.css" />

    <!------ Open Default Tab on Load ------>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("defaultOpenBtn").click();

        };
    </script>

    <!------ Open Tabs Script ------>
    <script type="text/javascript">
        function openTable(evt, tableName)
        {
            var i, tabcontent, tablinks;

            // Hide all elements of class="tabcontent"
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++)
            {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks", remove class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++)
            {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show current tab, add an "active" class to button that opened the tab
            document.getElementById(tableName).style.display = "block";
            evt.currentTarget.className += " active";
        };
    </script>

</head>

<body>
    <!-- Header-->
    <?php include '../inc/header-signedin.php';?>

    <box>
        <!-- Sidebar -->
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
                <img src="../img/icons8-database-50.png" />
                <br />
                Database
            </button>

            <button class="sidebar-btn">
                <img src="../img/icons8-business-report-50.png" />
                <br />
                Reports
            </button>
        </sidebar>

        <!-- Page Content -->

        <container2>
            <welcome-bar text-align="center">
                <div class="welcome-text">
                    Database
                </div>

                <div class="vl"></div>
                <div class="tab">
                    <button class="tablinks" onclick="openTable(event, 'Authors')">Authors</button>
                    <button class="tablinks" onclick="openTable(event, 'Reviewers')">Reviewers</button>
                    <button class="tablinks" onclick="openTable(event, 'Reviews')">Reviews</button>
                    <button class="tablinks" onclick="openTable(event, 'Papers')">Papers</button>
                    <button class="tablinks" onclick="openTable(event, 'Defaults')">Defaults</button>
                </div>
                <!-- Invisible button - opens default tab content -->
                <button class="tablinks" onclick="openTable(event, 'DefaultOpen')" id="defaultOpenBtn" style="background-color: transparent; color: transparent; border: none" >d</button>
            </welcome-bar>

            <container2>

                <div id="DefaultOpen" class="tabcontent">
                    <default-message-box>
                        <p style="margin-top: 200px; margin-left: 300px;">Click on the tabs to view and modify your database.</p>
                    </default-message-box>
                </div>

                <!--- Authors Table -->
                <div id="Authors" class="tabcontent">
                    <scroll-table>
                        <table class="btable" id="AuthorsTable">
                            <tr>
                                <th>Authors</th>
                            </tr>

                        </table>
                    </scroll-table>
                </div>

                <!-- Reviewers Table -->
                <div id="Reviewers" class="tabcontent">
                    <scroll-table>
                        <table class="btable" id="ReviewersTable">
                            <tr>
                                <th>Reviewers</th>
                            </tr>

                        </table>
                    </scroll-table>
                </div>

                <!-- Reviews Table -->
                <div id="Reviews" class="tabcontent">
                    <scroll-table>
                        <table class="btable" id="ReviewsTable">
                            <tr>
                                <th>Reviews</th>

                            </tr>
                            <tr>
                                <th>Action</th>
                                <th>ReviewID</th>
                                <th>PaperID</th>
                                <th>ReviewerID</th>
                                <th>AppropriatenessOfTopic</th>
                                <th>TimelinessOfTopic</th>
                                <th>SupportiveEvidence</th>
                                <th>TechnicalQuality</th>
                                <th>ScopeOfCoverage</th>
                                <th>CitationOfPreviousWork</th>
                                <th>Originality</th>
                                <th>ContentComments</th>
                                <th>OrganizationOfPaper</th>
                                <th>ClarityOfMainMessage</th>
                                <th>Mechanics</th>
                                <th>WrittenDocumentComments</th>
                                <th>SuitabilityForPresentation</th>
                                <th>PotentialInterestInTopic</th>
                                <th>PotentialForOralPresentationComments</th>
                                <th>OverallRating</th>
                                <th>OverallRatingComments</th>
                                <th>ComfortLevelTopic</th>
                                <th>ComfortLevelAcceptability</th>
                                <th>Complete</th>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>



                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                            <tr>
                                <action-div>
                                    <td>
                                        <button>Modify</button>
                                        <button>Delete</button>
                                    </td>
                                </action-div>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                                <td><input class="resized-table-text" type="text" id="a" name="a" value="1"></td>
                            </tr>

                        </table>
                    </scroll-table>

                    <add-entry-box>
                        <table class="btable">
                            <tr>
                                <th>Add</th>
                                <th>ReviewID</th>
                                <th>PaperID</th>
                                <th>ReviewerID</th>
                                <th>AppropriatenessOfTopic</th>
                                <th>TimelinessOfTopic</th>
                                <th>SupportiveEvidence</th>
                                <th>TechnicalQuality</th>
                                <th>ScopeOfCoverage</th>
                                <th>CitationOfPreviousWork</th>
                                <th>Originality</th>
                                <th>ContentComments</th>
                                <th>OrganizationOfPaper</th>
                                <th>ClarityOfMainMessage</th>
                                <th>Mechanics</th>
                                <th>WrittenDocumentComments</th>
                                <th>SuitabilityForPresentation</th>
                                <th>PotentialInterestInTopic</th>
                                <th>PotentialForOralPresentationComments</th>
                                <th>OverallRating</th>
                                <th>OverallRatingComments</th>
                                <th>ComfortLevelTopic</th>
                                <th>ComfortLevelAcceptability</th>
                                <th>Complete</th>
                            </tr>

                            <tr>
                                <td><button>Add</button></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                                <td><input type="text" id="fname" name="fname"></td>
                            </tr>
                        </table>
                    </add-entry-box>
                </div>

                <!-- Papers Table -->
                <div id="Papers" class="tabcontent">
                    <scroll-table>
                        <table class="btable" id="PapersTable">
                            <tr>
                                <th>Papers</th>
                            </tr>
                        </table>
                    </scroll-table>
                </div>

                <!-- Defaults Table -->
                <div id="Defaults" class="tabcontent">
                    <scroll-table>
                        <table class="btable" id="DefaultsTable">
                            <tr>
                                <th>Defaults</th>
                            </tr>

                        </table>
                    </scroll-table>
                </div>


            </container2>

        </container2>
    </box>

    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>