
<html>

<link rel="stylesheet" type="text/css" href="CCBStyleSheet.css">


<head>
    <meta charset="UTF-8">
    <title>Match Information</title>
</head>

<ul>
    <li><a href="home.php">Home</a></li>
    <li><a class="active" href="playerRegistration.php">Registration</a></li>
    <li><a href="playerSearch.php">Information</a></li>
</ul>

<div class="matchPage">
    <h1 class="pageName">Match Information Form</h1>
</div>

<ul class="subMenu">
    <li><a href="playerRegistration.php">Player Registration</a></li>
    <li><a href="clubRegistration.php">Club Registration</a></li>
    <li><a href="contractForm.php">Contract Form</a></li>
    <li><a href="teamInfoForm.php">Team Information Form</a></li>
    <li><a class="active" href="matchInfoForm.php">Match Information Form</a></li>
</ul>

<body>

<div class="forms">
    <form class="forms" action="matchInfoForm.php" method="post">

        <h4 class="headers">Match Information </h4>
        Match ID: <input type="number" name="matchIDPerformance" title="Match ID" placeholder="Match ID"><br><br>
        Venue ID: <input type="number" name="venueID" title="Venue ID" placeholder="Venue ID"><br><br>
        Date of the match: <input type="date" name="matchDate" title="Date of the match"><br><br>

        <table  id="performanceTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Players Performance in Match Form</h4></caption>
            <tr>
                <th>Player ID</th>
                <th>Total wickets</th>
                <th>Total runs</th>
                <th>Outstanding performance</th>
            </tr>

            <tr>
                <td><input type="number" name="playerID0" title="Player ID" required></td>
                <td><input type="number" name="wickets0" title="Total wickets"></td>
                <td><input type="number" name="runs0" title="Total runs"></td>
                <td><input type="text" name="outStand0" title="Outstanding performance"></td>
            </tr>

        </table>
        <br><br>

        <h4 class="headers">Event Information </h4>
        Event ID: <input type="number" name="eventID" title="Event ID" placeholder="Event ID"><br><br>
        Event Name: <input type="text" name="eventName" title="Event Name" placeholder="Name of the Event"><br><br>
        Event Start Date: <input type="date" name="eventStart" title="Event Start Date"><br><br>
        Event End Date: <input type="date" name="eventEnd" title="Event End Date"><br><br>

        <table  id="matchTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Match Information Form</h4></caption>
            <tr>
                <th>Match ID</th>
                <th>Man-of-the match</th>
                <th>Umpires</th>
                <th>Team Batting First</th>
                <th>Team Bowling First</th>
            </tr>

            <tr>
                <td><input type="number" name="matchID0" title="Match ID" required></td>
                <td><input type="text" name="MVP0" title="Man-of-the match"></td>
                <td><input type="text" name="umpire0" title="Umpires"></td>
                <td><input type="text" name="battingFirst0" title="Team Batting First"></td>
                <td><input type="text" name="bowlingFirst0" title="Team Bowling First"></td>
            </tr>

        </table>
        <br><br>

        <input type="submit" name="submit">

    </form>
</div>


</body>

</html>
