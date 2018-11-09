<?php
	// 		class products
	// {
	// 	var $id;
	// 	var $quantity;
	// 	var $price;
	// 	var $name;
	// 	var $image;

	// }

	function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$charactersLength = strlen($characters);
    		$randomString = '';
    		for ($i = 0; $i < $length; $i++) {
        		$randomString .= $characters[rand(0, $charactersLength - 1)];
    		}
    		return $randomString;
	}

	function signUp(){
			require 'connect.php';

			$username = $_POST['username'];
			$password = $_POST['password'];
			$con_password = $_POST['con_password'];
			$email = $_POST['email'];

			if($password == $con_password){
				$sql = "INSERT INTO users (username, email, password, RegDate)
			VALUES ( '$username','$email', '$password', now()) ";
				$result = mysqli_query($conn, $sql);

			if($result){
					echo "<script>window.open('login.php', '_self')</script>";
						}
				else{
					echo "<script>alert('Unsuccessful Registration')</script>";

				}


			}else{
					?>
					<script type="text/javascript">
						document.getElementById('imageHelp').innerHTML = 'Password Does not match';
						document.getElementById('imageHelp').style.color = 'red';
					</script>
				<?php

			}


		}

function signIn(){

			require 'connect.php';

			$username =  mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

				$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

				$result = mysqli_query($conn, $sql);
				$check_user = mysqli_num_rows($result);

				if($check_user > 0){
					$row = mysqli_fetch_array($result);
					$_SESSION['login-status'] = true;
					$_SESSION['username'] = $row["username"];
					$_SESSION['email'] = $row["email"];
					$_SESSION['id'] = $row["id"];
					echo "<script>window.open('login_profile.php', '_self')</script>";
						}
				else{

					$_SESSION['login-status'] = false;

					?>
						<script type = 'text/javascript'>
							alert("Invalid Email or Password");
							// document.getElementById('alert').style.display = 'block';
		    			// 	document.getElementById('alert').innerHTML = 'Invalid Email or Password, Try Again';
						</script>
					<?php
				}
		}
function diagnose(){
		require 'connect.php';
	$pain_bones = $_POST["pain_bones"];
	$pain_arm = $_POST["pain_arm"];
	$pain_leg = $_POST["pain_leg"];
	$st_growth = $_POST["st_growth"];
	$muscle_cramps = $_POST["muscle_cramps"];
	$drowsiness = $_POST["drowsiness"];
	$teeth_deform = $_POST["teeth_deform"];
	$weakness = $_POST["weakness"];
	$weight_loss = $_POST["weight_loss"];
	$dry_skin = $_POST["dry_skin"];
	$poor_conc = $_POST["poor_conc"];
	$vomit = $_POST["vomit"];
	$nausea = $_POST["nausea"];
	$diahorea = $_POST["diahorea"];
	$dizzy = $_POST["dizzy"];
	$heartbeat_irregular = $_POST["heartbeat_irregular"];
	$headache = $_POST["headache"];
	$cold_feet = $_POST["cold_feet"];
	$pale_skin = $_POST["pale_skin"];
	$chest_pain = $_POST["chest_pain"];
   	 	$sql = "SELECT * FROM symtoms";
		$result = mysqli_query($conn, $sql);
		$check = mysqli_num_rows($result);
		$distance = 0;
		$max_distance = 0;
		$min_distance = 0;
		$class = array();
		if($check > 0){
			while($row = mysqli_fetch_array($result)){
				$distance = sqrt(pow(($pain_bones - $row["Pain in Bones"]), 2) +
												pow(($pain_arm - $row["Pain in arms"]), 2) +
												pow(($pain_leg - $row["Pain in legs"]), 2) +
												pow(($st_growth - $row["Stunted Growth"]), 2) +
												pow(($muscle_cramps - $row["Muscles Cramps"]), 2) +
												pow(($drowsiness - $row["Teeth Deformation"]), 2) +
												pow(($poor_conc - $row["Poor Concentration"]), 2) +
												pow(($vomit - $row["Vomitting"]), 2) +
												pow(($nausea - $row["Nausea"]), 2) +
												pow(($weakness - $row["Weakness"]), 2) +
												pow(($weight_loss - $row["Weight Loss"]), 2) +
												pow(($dry_skin - $row["Dry Skin"]), 2) +
												pow(($drowsiness - $row["Drowsiness"]), 2) +
												pow(($dizzy - $row["Dizzness"]), 2) +
												pow(($heartbeat_irregular - $row["Irregular Heartbeat"]), 2) +
												pow(($headache - $row["Headache"]), 2) +
												pow(($cold_feet - $row["Cold Feet"]), 2) +
												pow(($pale_skin - $row["Pale Skin"]), 2) +
												pow(($chest_pain - $row["Chest Pain"]), 2)
											);
				if($distance >= $max_distance){
					$max_distance = $distance;
				}else{
					$min_distance = $distance;
					$user_class = $row["Class"];
				}
			}
		}
		return $user_class;
}


function logOut(){
				session_destroy();
				header('location: index.php');

		}

?>
