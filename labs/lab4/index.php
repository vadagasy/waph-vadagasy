 <?php
	session_start(); 
	if (isset($_POST["username"]) and isset($_POST["password"])){  
		if (checklogin_mysql($_POST["username"],$_POST["password"])) {
			$_SESSION['authenticated'] = TRUE;
			$_SESSION['username'] = $_POST["username"];	
			//$_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];
		}else{
			session_destroy();
			echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
			die();
		}
	}
	if (!$_SESSION['authenticated'] or $_SESSION['authenticated'] != TRUE)
	{
		session_destroy();
		echo "<script>alert('You have not login.PLease login first');</script>";
		header("Refresh:0; url=form.php");
		die();
	}
	/*if ( $_SESSION["browser"] != $_SERVER["HTTP_USER_AGENT"]){
		session_destroy();
		echo "<script>alert('Sesssion Hijacking is detected!');</script>";
		header("Refresh:0; url=form.php");
		die();
	}*/
	/*function checklogin($username, $password) {
		$account = array("admin","1234");
		if (($username== $account[0]) and ($password == $account[1])) 
		  return TRUE;
		else 
		  return FALSE;
  	}*/
  	function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost','vadagasy' /*DB username*/,'Vada@16' /*DB password*/,'waph' /*DB name*/);
				if ($mysqli->connect_errno){
					printf("Datebase connection failed: %s\n", $mysql->connect_error);
					exit();
					}
	$sql = "SELECT  * FROM users  WHERE username='" . $username . "' ";
					$sql=$sql . " AND password = md5('" . $password . "')";
			$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("ss", $username,$password);
		$stmt->execute();
		$result=$stmt->get_result();
		if($result->num_rows ==1) return TRUE;
		return FALSE;
		/*echo "DEBUG>sql=$sql";
	 	  //return TRUE;
		$result = $mysqli->query($sql);
		*/

		/*$prepared_sql = "SELECT * FROM users WHERE username= ? " . " AND password=md5(?);";
		$stmt = $mysqli->prepare($prepared_sql);
		$stmt->bind_param("ss", $username,$password);
		$stmt->execute();
		$result=$stmt->get_result();
		if($result->num_rows ==1)ss
			return TRUE;
			*/
  	}
?>
  	<h2> Welcome <?php echo htmlentities($_SESSION['username']); ?> !</h2>
  	<a href="logout.php">Logout</a>


