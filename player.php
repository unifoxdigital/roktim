<?php
	include ('config.php');

	if (isset($_POST['firstName'])) {
 	# code...
 		$firstName = $_POST['firstName'];
	 }
	 if (isset($_POST['middleName'])) {
 	# code...
 		$middleName = $_POST['middleName'];
	 }
	 if (isset($_POST['lastName'])) {
 	# code...
 		$lastName = $_POST['lastName'];
	 }
	 if (isset($_POST['father'])) {
 	# code...
 		$father = $_POST['father'];
	 }
	 if (isset($_POST['mother'])) {
 	# code...
 		$mother = $_POST['mother'];
	 }
	 if (isset($_POST['dob'])) {
 	# code...
 		$dob = $_POST['dob'];
	 }
	 if (isset($_POST['currentlID'])) {
 	# code...
 		$currentlID = $_POST['currentlID'];
	 }
	 if (isset($_POST['currentHouse'])) {
 	# code...
 		$currentHouse = $_POST['currentHouse'];
	 }
	 if (isset($_POST['currentStreet'])) {
 	# code...
 		$currentStreet= $_POST['currentStreet'];
	 }

	 if (isset($_POST['currentPost'])) {
 	# code...
 		$currentPost= $_POST['currentPost'];
	 }
	 if (isset($_POST['currentThana'])) {
 	# code...
 		$currentThana= $_POST['currentThana'];
	 }
	 if (isset($_POST['currentDistrict'])) {
 	# code...
 		$currentDistrict= $_POST['currentDistrict'];
	 }
	 if (isset($_POST['permanentlID'])) {
 	# code...
 		$permanentlID= $_POST['permanentlID'];
	 }
	 if (isset($_POST['permanentHouse'])) {
 	# code...
 		$permanentHouse= $_POST['permanentHouse'];
	 }
	 if (isset($_POST['permanentStreet'])) {
 	# code...
 		$permanentStreet= $_POST['permanentStreet'];
	 }
	 if (isset($_POST['permanentPost'])) {
 	# code...
 		$permanentPost= $_POST['permanentPost'];
	 }
	 if (isset($_POST['permanentThana'])) {
 	# code...
 		$permanentThana= $_POST['permanentThana'];
	 }
	 if (isset($_POST['permanentDistrict'])) {
 	# code...
 		$permanentDistrict= $_POST['permanentDistrict'];
	 }
	 if (isset($_POST['clubPlayedFor0'])) {
 	# code...
 		$clubPlayedFor0= $_POST['clubPlayedFor0'];
	 }
	 if (isset($_POST['transferredTo0'])) {
 	# code...
 		$transferredTo0= $_POST['transferredTo0'];
	 }
	 if (isset($_POST['transferredFrom0'])) {
 	# code...
 		$transferredFrom0= $_POST['transferredFrom0'];
	 }
	 if (isset($_POST['totalRuns0'])) {
 	# code...
 		$totalRuns0= $_POST['totalRuns0'];
	 }
	 if (isset($_POST['totalWickets0'])) {
 	# code...
 		$totalWickets0= $_POST['totalWickets0'];
	 }
	 
	 if (isset($_POST['teamLeader0'])) {
 	# code...
 		$teamLeader0= $_POST['teamLeader0'];
	 }


	 if (isset($_POST['clubFor0'])) {
 	# code...
 		$clubFor0= $_POST['clubFor0'];
	 }
	 if (isset($_POST['clubAgainst0'])) {
 	# code...
 		$clubAgainst0= $_POST['clubAgainst0'];
	 }
	 if (isset($_POST['runs0'])) {
 	# code...
 		$runs0= $_POST['runs0'];
	 }
	 if (isset($_POST['wickets0'])) {
 	# code...
 		$wickets0= $_POST['wickets0'];
	 }
	 if (isset($_POST['matchID0'])) {
 	# code...
 		$matchID0= $_POST['matchID0'];
	 }
	 if (isset($_POST['eventID0'])) {
 	# code...
 		$eventID0= $_POST['eventID0'];
	 }
	 if (isset($_POST['degree0'])) {
 	# code...
 		$degree0= $_POST['degree0'];
	 }
	 if (isset($_POST['dept0'])) {
 	# code...
 		$dept0= $_POST['dept0'];
	 }
	 if (isset($_POST['institute0'])) {
 	# code...
 		$institute0= $_POST['institute0'];
	 }
	 if (isset($_POST['year0'])) {
 	# code...
 		$year0= $_POST['year0'];
	 }
	 if (isset($_POST['result0'])) {
 	# code...
 		$result0= $_POST['result0'];
	 }
	 if (isset($_POST['memID0'])) {
 	# code...
 		$memID0= $_POST['memID0'];
	 }
	 if (isset($_POST['memName0'])) {
 	# code...
 		$memName0= $_POST['memName0'];
	 }
	 if (isset($_POST['memType0'])) {
 	# code...
 		$memType0= $_POST['memType0'];
	 }
	 if (isset($_POST['regDate0'])) {
 	# code...
 		$regDate0= $_POST['regDate0'];
	 }

	 if (isset($_POST['expDate0'])) {
 	# code...
 		$expDate0= $_POST['expDate0'];
	 }
	 if (isset($_POST['dor'])) {
 	# code...
 		$dor= $_POST['dor'];
	 }

	 $sql_Query= "INSERT INTO player (fname,mname,lname,fa_name,mo_name,dob,loc_id,	preset_house,present_street,present_post_code,present_thana,present_district,permanent_house,permanent_street,permanent_post_code,permanent_thana,permanent_district,previous_club_name,previous_from,previous_to,previous_run,previous_wicket,previous_leader,best_performance_club_name,best_performance_opponenet_club,best_performance_event,best_performance_match,best_performance_run,best_performance_wicket,educational_name,educational_institute,educational_board,educational_year,educational_result,membership_id,membership_name,membership_type,membership_registration_date,membership_expiry_year) VALUES ('$firstName','$middleName','$lastName','$father','$mother','$dob','$currentlID','$currentHouse','$currentStreet','$currentPost','$currentThana','$currentDistrict','$permanentlID','$permanentHouse','$permanentStreet','$permanentPost','$permanentThana','$permanentDistrict','$clubPlayedFor0','$transferredTo0','$transferredFrom0','$totalRuns0','$totalWickets0','$teamLeader0','$clubFor0','$clubAgainst0','$runs0','$wickets0','$matchID0','$matchID0','$eventID0','$degree0','$dept0','$institute0','$year0','$result0','$memID0','$memName0','$memType0','$regDate0','$expDate0','$dor')";

	 if(mysqli_query($con,$sql_Query)){

	 	header("Location: index.php");
		die();
	 
	 }
	 else{
	 
	 	mysql_error();
	 
	 }
	 mysqli_close($con);


?>