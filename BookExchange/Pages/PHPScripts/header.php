

<?php

	function connectDb()
	{
		$host='localhost';
		$database='ExBook';
		$username='webUser';
		$password ='g->uz(@z';
		$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

		//$mysqli = new mysqli( $host, $username, $password, $database);
		return $pdo;

	}


	// $connect= mysql_connect($host,$username,$password);
	// mysql_select_db($database);
	// $getpic="Select ProfilePic from Client where C_ID = '" . $_SESSION['LogID'] . "' ; ";
	// $resultID=mysql_query($getpic,$connect);
	// $row=mysql_fetch_row($resultID);
	// $_SESSION['profilepic'] = $row[0];
	// mysql_close($connect);
	function insert_book($Classname , $ClassNumber , $BookTitle , $Edition , $Author , $Price , $ContactName , $ContactEmail)
	 {

	 	$pdo = connectDb();
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

			echo "<script type='text/javascript'>alert('ins');</script>";

			$stmt = $pdo->prepare('INSERT INTO Requests (Classname, ClassNumber, BookTitle, Edition, Author, ContactName, ContactEmail , Price) VALUES  (:Classname, :ClassNumber, :BookTitle, :Edition, :Author, :ContactName, :ContactEmail , :Price ) ');

			$stmt->bindParam(':Classname', $Classname);
			$stmt->bindParam(':ClassNumber', $ClassNumber);
			$stmt->bindParam(':BookTitle', $BookTitle);
			$stmt->bindParam(':Edition', $Edition);
			$stmt->bindParam(':Author', $Author);
			$stmt->bindParam(':Price', $Price);
			$stmt->bindParam(':ContactName', $ContactName);
			$stmt->bindParam(':ContactEmail', $ContactEmail);

			$stmt->execute();

			$stmt = null;

		  //  $pdo->close();
		

	


	}
?>