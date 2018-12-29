<html>
<head>
    <meta charset="UTF-8">
	<title>Player Registration Form</title>
</head>

<ul>
    <li><a href="">Home</a></li>
    <li><a class="active" href="">Registration</a></li>
    <li><a href="playerProfile.php">Information</a></li>
</ul>

<div class="playerPage">
    <h1 class="pageName">Player Registration Form</h1>
</div>

<ul class="subMenu">
    <li><a class="active" href="playerRegistration.php">Player Registration</a></li>
    <li><a href="clubRegistration.php">Club Registration</a></li>
    <li><a href="contractForm.php">Contract Form</a></li>
    <li><a href="teamInfoForm.php">Team Information Form</a></li>
    <li><a href="matchInfoForm.php">Match Information Form</a></li>
</ul>

<body>

<div class="forms">
	<form class="forms" action="player.php" method="POST">

        <h4 class="headers">General Information </h4>

		First Name: <input type="text" name="firstName" title="First Name" placeholder="Your First Name" required><br><br>
		Middle Name: <input type="text" name="middleName" title="Middle Name" placeholder="Your Middle Name"><br><br>
		Last Name: <input type="text" name="lastName" title="Last Name" placeholder="Your Last Name" required><br><br>
		Father's Name: <input type="text" name="father" title="Father's Name" placeholder="Your Father's Name"><br><br>
		Mother's Name: <input type="text" name="mother" title="Mother's Name" placeholder="Your Mother's Name"><br><br>
        Date of Birth: <input type="date" name="dob" title="Date of Birth"><br><br>

        <h4 class="headers">Present Address </h4>

		Location ID: <input type="number" name="currentlID" title="Location ID" placeholder="Your Present Location ID" required><br><br>
		House: <input type="text" name="currentHouse" title="House" placeholder="Your Present House"><br><br>
		Street: <input type="text" name="currentStreet" title="Street" placeholder="Your Present Street"><br><br>
		Post Code: <input type="text" name="currentPost" title="Post Code" placeholder="Your Present Post Code"><br><br>
		Thana: <input type="text" name="currentThana" title="Thana" placeholder="Your Present Thana" required><br><br>
		District: <input type="text" name="currentDistrict" title="District" placeholder="Your Present District" required><br><br>

        <h4 class="headers">Permanent Address </h4>

        Same as present address: <input type="checkbox" name="sameAdrs" value="1" title=""><br><br>

        Location ID: <input type="number" name="permanentlID" title="Location ID" placeholder="Your Permanent Location ID"><br><br>
        House: <input type="text" name="permanentHouse" title="House" placeholder="Your Permanent House"><br><br>
        Street: <input type="text" name="permanentStreet" title="Street" placeholder="Your Permanent Street"><br><br>
        Post Code: <input type="text" name="permanentPost" title="Post Code" placeholder="Your Permanent Post Code"><br><br>
        Thana: <input type="text" name="permanentThana" title=" Thana" placeholder="Your Permanent Thana"><br><br>
        District: <input type="text" name="permanentDistrict" title="District" placeholder="Your Permanent District"><br><br>


        <table id="historyTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Previous History</h4></caption>

            <tr>
                <th>Club Name</th>
                <th>From</th>
                <th>To</th>
                <th>Total Runs</th>
                <th>Total Wickets</th>
                <th>Team leader (Y/N)</th>
            </tr>

            <tr>
                <td><input type="text" name="clubPlayedFor0" title="Club Name"></td>
                <td><input type="text" name="transferredTo0" title="From"></td>
                <td><input type="text" name="transferredFrom0" title="To"></td>
                <td><input type="text" name="totalRuns0" title="Total Runs"></td>
                <td><input type="text" name="totalWickets0" title="Total Wickets"></td>
                <td><input type="radio" name="teamLeader0" value="Y" title="Yes"> YES<br>
                    <input type="radio" name="teamLeader0" value="N" title="No" checked> NO</td>
            </tr>

        </table>


        <table id="performanceTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Best Performance</h4></caption>
            <tr>
                <th>Club Name</th>
                <th>Opponent club name</th>
                <th>Event Id</th>
                <th>Match Id</th>
                <th>Runs</th>
                <th>Wickets</th>
            </tr>

            <tr>
                <td><input type="text" name="clubFor0" title="Club Name"></td>
                <td><input type="text" name="clubAgainst0" title="Opponent club name"></td>
                <td><input type="text" name="runs0" title="Event Id"></td>
                <td><input type="text" name="wickets0" title="Match Id"></td>
                <td><input type="text" name="matchID0" title="Runs"></td>
                <td><input type="text" name="eventID0" title="Wickets"></td>
            </tr>

        </table>


        <table id="EducationTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Educational Qualifications</h4></caption>
            <tr>
                <th>Name of degree</th>
                <th>Institute/Department</th>
                <th>Board/University</th>
                <th>Year</th>
                <th>Result</th>
            </tr>

            <tr>
                <td><input type="text" name="degree0" title="Name of degree"></td>
                <td><input type="text" name="dept0" title="Institute/Department"></td>
                <td><input type="text" name="institute0" title="Board/University"></td>
                <td><input type="text" name="year0" title="Year"></td>
                <td><input type="text" name="result0" title="Result"></td>
            </tr>

        </table>

        <table id="MembershipTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Membership Details</h4></caption>
            <tr>
                <th>Membership ID</th>
                <th>Membership Name</th>
                <th>Type</th>
                <th>Registration Date</th>
                <th>Expiry Date</th>
            </tr>

            <tr>
                <td><input type="number" name="memID0" title="Membership ID"></td>
                <td><input type="text" name="memName0" title="Membership Name"></td>
                <td><input type="text" name="memType0" title="Type"></td>
                <td><input type="date" name="regDate0" title="Registration Date"></td>
                <td><input type="date" name="expDate0" title="Expiry Date"></td>
            </tr>

        </table>

        Signature of the Player:  ...................<br><br>
        Player Registration Date: <input type="date" name="dor" title="Player Registration Date"><br><br><br>

		<input type="submit" name="submit">

	</form>
</div>



</body>

</html>
