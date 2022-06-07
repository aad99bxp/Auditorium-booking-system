<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Student Registration</title>

	<style>
.header{
  padding: 60px;
  text-align: center;
  background: #216BFA;
  color: white;
  font-size: 30px;
  border-radius:00px;
  margin-bottom: 150px;
}

.footer{
  text-align: center;
  background:#216BFA;
  color: white;
  font-size: 30px;
  margin-top: 00px;
  border-radius:00px;
  height: 50px;
}

</style>

</head>


<body>
<header class="header">
    <h1 style="text-color:white;"> AUDBOOK </h1>
	<div>
	 <a href="logout.php" class="button">Logout</a>
    </div>
</header>

  <center>

 <form action="insert.php" method="post">
	<div class="login-box2">
			
	 <div class="textbox">
	  <i class="fa fa-user" aria-hidden="true"></i>	 		
      <label for="eventname">EventName:</label>
      <input type="text" name="eventname" id="eventname">
     </div> 
	
	 <div class="textbox">
	   <i class="fa fa-user" aria-hidden="true"></i>
	   <label for="auditorium">Select Auditorium:</label>
	   <input type="text" name="auditorium" id="auditorium">

	 </div>	

	 <div class="textbox">
	    <i class="fa fa-user" aria-hidden="true"></i>
	    <label for="date">Date of Event:</label>
		<input type="date" name="date" id="date"> 
	 </div>	

	 <div class="textbox">
	    <i class="fa fa-user" aria-hidden="true"></i>
	    <label for="stime">Start Time:</label>
		<input type="text" name="stime" id="stime">
	 </div>	

	 <div class="textbox">
	    <i class="fa fa-user" aria-hidden="true"></i>
	    <label for="etime">End Time:</label>
		<input type="text" name="etime" id="etime">
	 </div>	


      <input class=button type="submit" value="BOOK" style="color:white; font-size:30px; paddling-top:10px; border-radius:10px;">
    </div>
 </form>
 </center>
</body>


</html>
