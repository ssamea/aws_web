
<?php
// 실시간(?) 접속자 보여주기 by 오길호(prince@kilho.net/k2lab.com)
//
// Subject : 초기 테이블 설정

include "./config.php";
mysql_query("create table KILHO_NOWUSER (ip char(16) not null primary key, nickname varchar(40), regdate datetime,index (regdate))",$db) OR die (mysql_error());
mysql_query("insert into KILHO_NOWUSER values ('CHECKID','CHECKID',now())",$db) OR die (mysql_error());
mysql_close($db);
?>
