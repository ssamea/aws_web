<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>board_add_form.php</title>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/css/bootstrap.css">
        
    </head>
    <body>
        <h1 class="display-4">글쓰기</h1>
        <!-- board_add_action.php로 넘기는 폼 -->
        <form class="form-horizontal" action="./board_add_action.php" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">비밀번호 : </label>
                <div class="col-sm-10">
                    <!-- 글 비밀번호 입력 상자 -->
                    <input class="form-control" name="boardPw" id="password" type="password" placeholder="Password"/>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputTitle1" class="col-sm-2 control-label">글 제목 : </label>
                <div class="col-sm-10">
                    <!-- 글 제목 입력 상자 -->
                    <input class="form-control" name="boardTitle" id="Title" type="text" placeholder="Title"/>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputContent1" class="col-sm-2 control-label">글 내용 : </label>
                <div class="col-sm-10">
                    <!-- 글 내용 입력 텍스트영역 -->
                    <textarea class="form-control" name="boardContent" id="content" rows="5" cols="50" placeholder="Content"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName1" class="col-sm-2 control-label">작성자명 : </label>
                <div class="col-sm-10">
                    <!-- 작성자명 입력 상자 -->
                    <input class="form-control" name="boardUser" id="name" type="text" placeholder="Name"/>
                </div>
            </div>
            
            <div>
                &nbsp;&nbsp;&nbsp;
                <!-- 글 입력 버튼 -->
                <button class="btn btn-primary" type="submit" value="글 입력">글 입력</button>
                &nbsp;&nbsp;
                <!-- 입력 내용 초기화 버튼 -->
                <button class="btn btn-primary" type="reset" value="초기화">초기화</button>
                &nbsp;&nbsp;
                <!-- 리스트로 돌아가는 버튼 -->
                <a class="btn btn-primary" href="./index.php#Board">리스트로 돌아가기</a>
            </div>
        </form>
        <script type="text/javascript">
            //id가 XX인 객체에 변화가 생기면 checkXX 함수를 변화된 객체의 값을 매개로 호출
            $("#password").change(function(){
                checkPassword($('#password').val());
            });
            $("#Title").change(function(){
                checkTitle($('#Title').val());
            });
            $("#content").change(function(){
                checkTitle($('#content').val());
            });
            $("#name").change(function(){
                checkName($('#name').val());
            });
            //입력된 변수의 길이를 참조하여 조건문을 통해 최소 입력 길이 유효성 검사를 하는 함수
            function checkPassword(password) { 
                if(password.length < 4) { 
                    alert("비밀번호는 4자 이상 입력하여야 합니다."); 
                    $('#password').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            } 
            
            function checkTitle(Title) {
                if(Title.length < 2) {
                    alert('제목은 2자 이상 입력해야 합니다.');
                    $('#Title').val('').focus();
 
                    return false;
                } else { 
                    return true;
                } 
            }
 
            function checkContent(content) {
                if(content.length < 2) {            
                    alert('내용은 2자리 이상 입력해야 합니다.');
                    $('#content').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            }
 
            function checkName(name) {
                if(name.length < 2) {            
                    alert('작성자명은 2자리 이상 입력해야 합니다.');
                    $('#name').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            }
        </script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
