<?php

if(isset($_POST['Names']) && isset($_POST['Email']) && isset($_POST['Class']) && isset($_POST['Year'])&& isset($_POST['Competition'])) 
{
$Names=$_POST['Names'];
$Email=$_POST['Email'];
$Class=$_POST['Class'];
$Year=$_POST['Year'];
$Competition=$_POST['Competition'];

$host= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "winning";

//create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno() .') '
	. mysqli_connect_error());
}else{
	$sql = "SELECT * FROM `statistics` WHERE `year` = '$Year'";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_assoc($result);
	$updated=(int)$rows[$Competition]+1;
	$sql1= "UPDATE `statistics` SET `".$Competition."`='$updated' WHERE `year`='$Year'";
	
	if(mysqli_query($conn,$sql1)){
		echo 'record is inserted sucessfully';
	}
	else{
		echo "Error: " .$sql ."<br>" .mysqli_error($conn);
		
	}
	$conn->close();
}
}

?>















<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
  background-image: url('images/facultyn.jpg');
  background-size: cover;
  background-position: center;

  padding-bottom:15px;
  padding-left:200px;
  padding-right:200px;
  padding-top:-20px;

}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.my_container h2{
   color: white; /* or hexidecimal */
   background-color:green;
   text-align:centre;
 
}

</style>
<body>

<div class="my_container">
   <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME,ENTER YOUR RECENT ACHIEVEMENTS HERE</h2>
</div>


<div class="container">
  <form action="#" method="POST"  >
    <label for="fname">Name</label>
    <input type="text" id="fname" name="Names" placeholder="Your name..">

   
	 <label for="lname">Email</label>
    <input type="text" id="email" name="Email" placeholder="Your email..">

 <label for="lname">Class</label>
    <input type="text" id="class" name="Class" placeholder="Your class">

 <label for="lname">Year</label>
    <input type="text" id="class" name="Year" placeholder="Year">

    <label for="country">competition</label>
    <select id="country" name="Competition">
      <option value="smartINDIA">smart india</option>
      <option value="AI">AI</option>
      <option value="IOT">IOT</option>
    </select>
  
    <input type="submit" value="Submit" >
  </form>
</div>

</body>
</html>
