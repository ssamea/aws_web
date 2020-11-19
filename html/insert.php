<?php
 $host = 'db2015154036.chvt1sdp03kh.ap-northeast-1.rds.amazonaws.com';
 $user = 'admin';
 $pw = 'rladusdo67';
 $dbName ='db2015154036';

 $conn = new mysqli($host, $user, $pw, $dbName);

 if(!$conn){
       echo 'could not connect:'.mysql_error($conn);
 }
 else{
	echo "succes mysql";
}
 mysqli_select_db($conn,$dbName);

$query = "INSERT INTO Hobby (list) VALUES('$_POST[schedule]')";
 if(mysqli_query($conn, $query)){
      // echo "insert successfully";
      echo "<script>alert(\"등록 하시겠습니까?\");</script>";
      echo("<script>location.replace('./index.php#Certificates');</script>"); 
  }
  else{
       echo "Error:".$query."mesage:".mysqli_error($conn);
 }

 mysqli_close($conn);
?>

