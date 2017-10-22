<?php

echo "<h1>PDO demo!</h1>";

$hostname = "sql1.njit.edu";
$username = "ejc23";
$password = "carabao74";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=ejc23",
	    $username, $password);
	    echo "Connected successfully"; 

	    // $date = date('Y-m-d', time());
	    // $sql ="INSERT INTO accounts (email,fname,lname,phone,birthday,gender,password)
    	// VALUES ('john@example.com','John', 'Doe',911,'$date','M','1234')";
    	// $q = $conn->prepare($sql);
    	// $q->execute();

	    // $sql = "select id,email from accounts";
	    // $q = $conn->prepare($sql);
	    // $q->execute();
	    // $results = $q->fetchAll();

	    // if($q->rowCount()){

	    // 	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th></tr>";
	    // 	foreach ($results as $row) {
     //    		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
    	// 	}
	    // }else{
	    // 	echo '0 results';
	    // }



    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;

echo "test";

?>
