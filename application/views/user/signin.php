<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body class="h-full container-center">
    <div>
        <h1>로그인</h1>
        <div class="err">
            <?php
                if(isset($_GET["err"])){
                    print "로그인을 할 수 없습니다.";
                }
            ?>
        </div>
        <form action="signin" method="post">
            <div><input type="email" name="email" placeholder="email" value="<?=getParam('email')?>"  autofocus required></div>
            <div><input type="password" name="pw" placeholder="password" required></div>
            <div>
                <input type="submit" value="로그인">
            </div>
        </form> <!-- method="post" 로 날리려면 form 태그가 있어야함 -->
        <div>
            <a href="signup">회원가입</a>
        </div>
    </div>
    <!-- 
        get(삭제) : 값이 쿼리스트링으로 전달(쿼리스트링 : ?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=종이의+집) = 기준으로 왼쪽엔 key값 오른쪽은 value값 &->구분 
        post(등록, 수정) : 값이 body에 담겨져서 전달 
     -->
</body>
</html>