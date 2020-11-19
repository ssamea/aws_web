<?php
 $host = 'db2015154036.chvt1sdp03kh.ap-northeast-1.rds.amazonaws.com';
 $user = 'admin';
 $pw = 'rladusdo67';
 $dbName ='db2015154036';

 $conn = new mysqli($host, $user, $pw, $dbName);

 $str=$_GET['delete_emp_no'];

 if(!$conn){
       echo 'could not connect:'.mysql_error($conn);
 }
 else{
        echo "succes mysql";
}
 mysqli_select_db($conn,$dbName);

$query = "DELETE FROM Hobby WHERE list = $str";         
 if(mysqli_query($conn, $query)){
      echo "삭제 성공";
     // echo("<script>location.replace('./index.php#Hobby');</script>");
  }
  else{
       echo "Error:".$query."mesage:".mysqli_error($conn);
 }

 mysqli_close($conn);
?>
