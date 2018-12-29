<html>

<link rel="stylesheet" type="text/css" href="CCBStyleSheet.css">

<head>
    <meta charset="UTF-8">
	<title>Club Registration Form</title>
</head>

<ul>
    <li><a href="home.php">Home</a></li>
    <li><a class="active" href="">Registration</a></li>
    <li><a href="">Information</a></li>
</ul>

<div class="clubPage">
    <h1 class="pageName">Club Registration Form</h1>
</div>

<ul class="subMenu">
    <li><a href="playerRegistration.php">Player Registration</a></li>
    <li><a class="active" href="clubRegistration.php">Club Registration</a></li>
    <li><a href="">Contract Form</a></li>
    <li><a href="">Team Information Form</a></li>
    <li><a href="">Match Information Form</a></li>
</ul>

<body>

<div class="forms">
	<form class="forms" action="" method="post">

        <h4 class="headers">General Information </h4>
        Name of the club: <input type="text" name="clubName" title="Club Name" placeholder="Club Name"><br><br>
        Date of Establishment: <input type="date" name="dateEstablished" title="Date Established"><br><br>
        Name of the President: <input type="text" name="president" title="President's Name" placeholder="President's Name"><br><br>

        <h4 class="headers">CLub Address </h4>
		Location ID: <input type="number" name="clublID" title="Location ID" placeholder="Club's Location ID"><br><br>
		House: <input type="text" name="clubHouse" title="House" placeholder="Club Building"><br><br>
		Street: <input type="text" name="clubStreet" title="Street" placeholder="Club Street"><br><br>
		Post Code: <input type="text" name="clubPost" title="Post Code" placeholder="Club's Post Code"><br><br>
		Thana: <input type="text" name="clubThana" title="Thana" placeholder="Club Thana"><br><br>
		District: <input type="text" name="clubDistrict" title="District" placeholder="Club District"><br><br><br>

        <input type="submit" name="submit">

    </form>
</div>

</body>

</html>