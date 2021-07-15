<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../css/assets.css" />
    <link rel="stylesheet" href="../css/report-style.css" />

    <!------ Open Default Tab on Load ------>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("defaultOpenBtn").click();

        };
    </script>

    <!----- Column Chart Script ----->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        window.addEventListener("load", () => {
            google.charts.load('45', {
                packages: ['corechart']
            });

            google.charts.setOnLoadCallback(drawChart);
        });

        function drawChart() {

            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Score'],
                ['Paper1', 4.51],
                ['Paper2', 4.51],
                ['Paper3', 4.15],
                ['Paper4', 4.00],
                ['Paper5', 4.00],
                ['Paper6', 3.89],
                ['Paper7', 3.86],
                ['Paper8', 3.85],
                ['Paper9', 3.74],
                ['Paper10', 3.49],
                ['Paper11', 3.42],
                ['Paper12', 3.19],
                ['Paper13', 2.94],
                ['Paper14', 2.04],
                ['Paper15', 1.82],
            ]);

            // Visual elements of the chart
            var options = {
                title: 'Weighted Scores',
                height: 500,
                width: 700,
                hAxis: { slantedText: true, slantedTextAngle: 45 }

            };

            // Instantiate and draw chart
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
        }
    </script>

    <!------ Open Tabs Script ------>
    <script>
        function openReport(evt, reportName) {
            var i, tabcontent, tablinks;

            // Hide all elements of class="tabcontent"
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements of class="tablinks", remove the class active
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Displaycurrent tab, add "active" to button that opened the tab
            document.getElementById(reportName).style.display = "inline-flex";
            evt.currentTarget.className += " active";
        }
    </script>
</head>

<body>
    <!-- Header -->
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
                    Reports
                </div>

                <div class="vl"></div>

                <div class="tab">
                    <button class="tablinks" onclick="openReport(event, 'AuthorsReport')">Authors Report</button>
                    <button class="tablinks" onclick="openReport(event, 'ReviewersReport')">Reviewers Report</button>
                    <button class="tablinks" onclick="openReport(event, 'CommentsReport')">Comments Report</button>
                    <button class="tablinks" onclick="openReport(event, 'ScoresReport')">Score Summary Report</button>
                </div>
                <!-- invisible Button, auto-clicked on load to display default tab content -->
                <button class="tablinks" onclick="openReport(event, 'DefaultOpen')" id="defaultOpenBtn" style="background-color: transparent; color: transparent; border: none">d</button>
            </welcome-bar>

            <box>

                <!------ Tab Content --------->
                <div id="DefaultOpen" class="tabcontent">
                    <default-message-box>
                        <p style="margin-top: 200px; margin-left: 300px;">Click on the tabs to view your reports.</p>
                    </default-message-box>
                </div>

                <!-- Authors Report Content -->
                <div id="AuthorsReport" class="tabcontent">
                    <default-message-box>
                        Authors Report
                    </default-message-box>
                </div>

                <!-- Reviewers Report Content -->
                <div id="ReviewersReport" class="tabcontent">
                    <default-message-box>
                        Reviewers Report
                    </default-message-box>
                </div>

                <!-- Comments Report Content -->
                <div id="CommentsReport" class="tabcontent">
                    <default-message-box>
                        Comments Report
                    </default-message-box>
                </div>

                <!-- Score Summary Report Content -->
                <div id="ScoresReport" class="tabcontent">
                    <scroll-table>
                        <table class="btable">
                            <tr>
                                <th>PaperID</th>
                                <th>Title</th>
                                <th>AppropriatenessOfTopic</th>
                                <th>TimelinessOfTopic</th>
                                <th>SupportiveEvidence</th>
                                <th>TechnicalQuality</th>
                                <th>ScopeOfCoverage</th>
                                <th>CitationOfPreviousWork</th>
                                <th>Originality</th>
                                <th>OrganizationOfPaper</th>
                                <th>ClarityOfMainMessage</th>
                                <th>Mechanics</th>
                                <th>SuitabilityForPresentation</th>
                                <th>PotentialInterestInTopic</th>
                                <th>OverallRating</th>
                                <th>FileName</th>
                                <th>WeightedScore</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem Ipsum Dolor sit Amet Consectetur Adipiscing Elit</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>1.0</td>
                                <td>LoremIpsumDolor.docx</td>
                                <td>1.0</td>
                            </tr>
                        </table>
                    </scroll-table>

                    <!-- WEIGHTED SCORES COLUMN CHART-->
                    <div id="container" style="margin-right: 100px"></div>

                </div>

            </box>
        </container2>
    </box>


    <!-- Footer -->
    <?php include '../inc/footer.php';?>
</body>
</html>