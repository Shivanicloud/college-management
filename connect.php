<?php

$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$contact_no=filter_input(INPUT_POST,'contact_no');
if(!empty($name)){
if(!empty($email)){	
$host= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "popup";

//create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno() .') '
	. mysqli_connect_error());
}else{
	$sql = "INSERT INTO admission(name,email,contact_no)
	values ('$name','$email','$contact_no')";
	if($conn->query($sql)){
		?>
		<script>
		  alert("record is inserted sucessfully");
		  </script>
		  <?php
	}
	else{
		echo "Error: " .$sql ."<br>" .mysqli_error($conn);
		
	}
	$conn->close();
}
}
else{
	?>
	<script>
     alert("name should not empty");
	 </script>
	 <?php
}
}
else{
	?>
	<script>
     alert("email should not empty");
	 </script>
	 <?php
}	 

?>