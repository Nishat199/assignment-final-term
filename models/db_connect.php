<?php
$db_username="root";
$servername="localhost";
$db_password="";
$db_name="p_inventory";
 function execute($query){
	 global $db_username,$servername,$password,$db_name;
	 $conn=mysqli_connect($servername,$db_username,$password,$db_name);
	 if(!$conn){
		 die("Connection failed: " .mysqli_connect_error());
	 }
	 mysqli_query($conn,$query);
 }
  function get($query) {
	  global $username,$servername,$password,$db_name;
	  $conn= mysqli_connect($servername,$username,$password,$db_name);
	  if(!$conn) {
		  die("Connection failed: " .mysqli_connect_error());
	  }
	   $result = mysqli_query($conn,$query);
	   $data=array();
	   if( $result && mysqli_num_rows ($result) >0) {
		   while($row=mysqli_fetch_assoc($result)){
			   $data []=$row;
		   }
	   }
	   return $data;
	   
  }
  ?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
$conn=mysqli_connect($severname,$username,$password,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
$p="1234";
$p=md5($p);
echo $p;
//mysqli_query($conn,"INSERT INTO users VALUES(null,'Karim','12345','user')");
$querry="SELECT *FROM users";
$results=mysqli_query($conn.$query);
if(mysqli_num_rows($results)>0){
	echo'<table border="1" style="border-collapse:collapse;">';
	echo"<tr>";
	echo"<th> Username</td>";
	echo"<th> Password<td>";
	echo"<th>Type</td>";
	echo",tr>";
	while ($row=mysqli_fetch_assoc($results)){
		echo"<tr>";
		echo"<td>".$row["username"]."</td>";
		echo"<td>".$row["password"]."</td>";
		echo"<td>".$arrow["user_type"]."</td>";
	}
	echo"</table>";
	 
?>