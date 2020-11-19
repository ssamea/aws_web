<html>
    <head>
    </head>
    <body>
        <h1>boardAddAction.php</h1>
        <?php
            //board_add_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
            $board_pw = $_POST["boardPw"];
            $board_title = $_POST["boardTitle"];
            $board_content = $_POST["boardContent"];
            $board_user = $_POST["boardUser"];
            echo "board_pw : " . $board_pw . "<br>";
            echo "board_title : " . $board_title . "<br>";
            echo "board_content : " . $board_content . "<br>";
            echo "board_user : " . $board_user . "<br>";
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
            //board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
            $sql = "INSERT INTO board (board_pw, board_title, board_content, board_user, board_date) values ('".$board_pw."','".$board_title."','".$board_content."','".$board_user."',now())";
            $result = mysqli_query($conn,$sql);
            // 쿼리 실행 여부 확인
            if($result) {
                echo "입력 성공: ".$result; //과제 작성시 에러메시지 출력하게 만들기
            } else {
                echo "입력 실패: ".mysqli_error($conn);
            }
            mysqli_close($conn);
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: http://54.248.202.89/index.php#Board "); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
        ?>
    </body
</html>

