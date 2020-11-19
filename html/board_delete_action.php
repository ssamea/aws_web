<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    </head>
    <body>
      
        <?php
            //board_delete_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
            $board_no = $_POST["board_no"];
            $board_pw = $_POST["board_pw"];
            echo "board_no : " . $board_no . "<br>";
            echo "board_pw : " . $board_pw . "<br>";
            //mysql 커넥션 객체 생성
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
            //board테이블에서 입력된 글 번호와, 글 비밀번호가 일치하는 행 삭제 쿼리
            $sql = "DELETE FROM board WHERE board_pw='".$board_pw."'AND board_no=".$board_no."";
            //쿼리 실행 여부 확인
            if(mysqli_query($conn,$sql)) {
                echo "삭제 성공: ".$result; //과제 작성시 에러메시지 출력하게 만들기
            } else {
                echo "삭제 실패: ".mysqli_error($conn);
            }
        
            mysqli_close($conn);
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: http://54.248.202.89/index.php#Board");
        ?>
    </body
</html>
