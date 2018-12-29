<html>

<link rel="stylesheet" type="text/css" href="">


<head>
    <meta charset="UTF-8">
	<title>Contract Form</title>
</head>

<ul>
    <li><a href="home.php">Home</a></li>
    <li><a class="active" href="playerRegistration.php">Registration</a></li>
    <li><a href="playerSearch.php">Information</a></li>
</ul>

<div class="contractPage">
    <h1 class="pageName">Contract Form</h1>
</div>

<ul class="subMenu">
    <li><a href="playerRegistration.php">Player Registration</a></li>
    <li><a href="clubRegistration.php">Club Registration</a></li>
    <li><a class="active" href="contractForm.php">Contract Form</a></li>
    <li><a href="teamInfoForm.php">Team Information Form</a></li>
    <li><a href="matchInfoForm.php">Match Information Form</a></li>
</ul>

<body>

<div class="forms">
	<form class="forms" action="contractForm.php" method="post">

        <h4 class="headers">Club Information </h4>
        Club ID: <input type="number" name="clubID" title="Club ID" placeholder="Club ID"><br><br>
        Name of the club: <input type="text" name="clubName" title="Club Name" placeholder="Club Name"><br><br>

        <h4 class="headers">First Party (Player) </h4>
        First Name: <input type="text" name="playerFirstName" title="First Name" placeholder="Player's First Name"><br><br>
        Middle Name: <input type="text" name="playerMiddleName" title="Middle Name" placeholder="Player's Middle Name"><br><br>
        Last Name: <input type="text" name="playerLastName" title="Last Name" placeholder="Player's Last Name"><br><br>
        Player ID: <input type="number" name="playerID" title="PLayer ID" placeholder="Player ID"><br><br>

        <h4 class="headers">Second Party (Authorized Person) </h4>
        First Name: <input type="text" name="officerFirstName" title="First Name" placeholder="Officer's First Name"><br><br>
        Middle Name: <input type="text" name="officerMiddleName" title="Middle Name" placeholder="Officer's Middle Name"><br><br>
        Last Name: <input type="text" name="officerLastName" title="Last Name" placeholder="Officer's Last Name"><br><br>
        Designation: <input type="text" name="designation" title="Designation" placeholder="Officer's Designation"><br><br>

        <h4 class="headers">Contract Period </h4>
        Start Date : <input type="date" name="startDate" title="Start Date"><br><br>
        End Date : <input type="date" name="endDate" title="End Date"><br><br>
        Contract Amount : <input type="text" name="contractAmount" title="Contract Amount" placeholder="Contract Amount"><br><br>


        <table id="ScheduleTable" border = "1" cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Payment Schedule</h4></caption>
            <tr>
                <th>Serial Number</th>
                <th>Due date</th>
                <th>Payment date</th>
                <th>Amount</th>
            </tr>

            <tr>
                <td><input type="number" name="contractSerial0" value="0" title="Serial Number" required></td>
                <td><input type="date" name="dueDate0" title="Due date" required></td>
                <td><input type="date" name="paymentDate0" title="Payment date" required></td>
                <td><input type="text" name="paidAmount0" title="Amount" required></td>
            </tr>

        </table>
        <br><br>

        Contract Witness 1: <input type="text" name="witness1" title="Contract Witness 1" placeholder="First Witness Name"><br><br>
        Contract Witness 2: <input type="text" name="witness2" title="Contract Witness 2" placeholder="Second Witness Name"><br><br>

        <input type="submit" name="submit">

    </form>
</div>



</body>

</html>
