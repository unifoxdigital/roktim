<html>
<head>
    <meta charset="UTF-8">
    <title>Team Information Form</title>
</head>

<ul>
    <li><a href="home.php">Home</a></li>
    <li><a class="active" href="playerRegistration.php">Registration</a></li>
    <li><a href="playerSearch.php">Information</a></li>
</ul>

<div class="teamPage">
    <h1 class="pageName">Team Information Form</h1>
</div>

<ul class="subMenu">
    <li><a href="playerRegistration.php">Player Registration</a></li>
    <li><a href="clubRegistration.php">Club Registration</a></li>
    <li><a href="contractForm.php">Contract Form</a></li>
    <li><a class="active" href="teamInfoForm.php">Team Information Form</a></li>
    <li><a href="matchInfoForm.php">Match Information Form</a></li>
</ul>

<body>

<div class="forms">
    <form class="forms" action="teamInfoForm.php" method="post">

        <h4 class="headers">Club Information</h4>
        Club ID: <input type="number" name="clubID" title="Club ID" placeholder="Club ID"><br><br>
        Club Name: <input type="text" name="clubName" title="Club Name" placeholder="Name of the Club"><br><br>
        Team Formation Date: <input type="date" name="formationDate" title="Team Formation Date"><br><br>

        <h4 class="headers">Event Information</h4>
        Event ID: <input type="number" name="eventID" title="Event ID" placeholder="Event ID"><br><br>
        Event Name: <input type="text" name="eventName" title="Event Name" placeholder="Name of the Event"><br><br>

        <h4 class="headers">Team Leader's Information</h4>
        Team Leader's Player ID: <input type="number" name="leaderID" title="Team Leader's Player ID" placeholder="Team Leader's Player ID"><br><br>
        Team Leader Name: <input type="text" name="leaderName" title="Team Leader Name" placeholder="Team Leader's Name"><br><br>

        <h4 class="headers">Coach Information</h4>
        Coach ID: <input type="number" name="coachID" title="Coach ID" placeholder="Coach ID"><br><br>
        Coach Name: <input type="text" name="coachName" title="Coach Name" placeholder="Coach Name"><br><br>

        <table id="playerTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Player List</h4></caption>

            <tr>
                <th>Player ID</th>
                <th>Player Name</th>
            </tr>

            <tr>
                <td><input type="number" name="playerID0" title="Club Name" required></td>
                <td><input type="text" name="playerName0" title="Opponent club name" required></td>
            </tr>

        </table>

        <input type="submit" name="submit">

    </form>
</div>



</body>

</html>
