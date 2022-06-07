<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="login.css">
    <style>
	.header{
      padding: 60px;
      text-align: center;
      background: #216BFA;
      color: white;
      font-size: 30px;
      border-radius:00px;
    }
    </style>

</head>

<body>
<body>
<header class="header">
    <h1 style="text-color:white;"> AUDBOOK </h1>
	<div>
	 <a href="logout.php" class="button">Logout</a>
    </div>
</header>
	<center>
	    <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => audbookweb
        $conn = mysqli_connect("localhost", "root", "", "audbookweb");

        // Check connection
        if($conn === false){
        	die("ERROR: Could not connect. "
        		. mysqli_connect_error());
        }
		// Taking all 5 values from the form data(input)
		$eventname = $_REQUEST['eventname'];
		$auditorium = $_REQUEST['auditorium'];
		$date = $_REQUEST['date'];
		$stime = $_REQUEST['stime'];
		$etime = $_REQUEST['etime'];
    



		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO event VALUES ('$eventname',
			'$auditorium','$date','$stime','$etime')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3> Selected Auditorium has been book successfully. Following are the details of your event:</h3>";

			echo nl2br("\n$eventname\n $auditorium\n "
				. "$date\n $stime\n $etime\n");

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
