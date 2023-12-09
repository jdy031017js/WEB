<?php
session_start();

include 'index_DB.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Text Links with Background</title>
</head>
<body>

<div class="container">
    <div class="left-link">
        <a href="#YOU AND I" style="font-weight: bold; text-decoration: none; color:white; font-size: 0.7em; font-weight: bold; padding: 40px;">YOU AND I</a>
    </div>

    <div class="right-links">
        <a href="#LOGIN" style="text-decoration: none; color: rgb(89, 89, 232); font-size: 1.3em; margin-right: 50px;">LOGIN</a>
        <a href="#MYHOME" style="text-decoration: none; color: rgb(89, 89, 232); font-size: 1.3em; margin-right: 50px;">MYHOME</a>
    </div>
</div>

<div class="container2">
    <div class="main-text">
        "일상의 작은 순간들, 랜덤으로 만나는 아름다움."
        <div class="subtitle-text">
            일상의 아름다움
        </div>
    </div>
    <img src="your-image-path.jpg" alt="Main Image" width="300">
    <div class="main-title">
        MYHOME
    </div>
    <h2>게시글</h2>
    <?php
        // 데이터베이스 연결 설정 (데이터베이스 호스트, 사용자이름, 비밀번호, 연결할 dB 이름)
        $conn = mysqli_connect("localhost", "root", "1234", "handb");
        //실행할 SQL 쿼리문, table에서 모든 열
        $sql = "SELECT * FROM hantable";
        $result = mysqli_query($conn, $sql);
        // mysqli_fetch_array($result): 결과 집합에서 한 행을 배열로 가져오는 함수,각 행과 열 값을 가져와 출력
        while($row = mysqli_fetch_array($result)) {
            echo "<li>{$row['id']} - {$row['description']}</li>";
        }
    ?>

    <!-- 로그인 폼 -->
    <form class="login-form" method="post">
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username" required>

        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" required>

        <button type="submit" name="login">Log In</button>
    </form>

    <!-- 회원가입 링크 -->
    <p>회원이 아니신가요? <a href="signIn.php">회원가입하기</a></p>

    <!-- 게시글 작성 폼 -->
    <form class="post-form" method="post">
        <label for="post-description">게시글 작성:</label>
        <textarea id="post-description" name="description" required></textarea>

        <button type="submit" name="post">올리기</button>
    </form>

    <?php
        // 게시글 올리기 버튼이 눌렸을 때의 처리
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post'])) {
            $postDescription = $_POST['description'];

            // 데이터베이스에 게시글 저장
            $insertQuery = "INSERT INTO hantable (description) VALUES ('$postDescription')";
            $insertResult = mysqli_query($conn, $insertQuery);

            // 성공적으로 저장되었을 경우 메시지 출력
            if ($insertResult) {
                echo "<p>게시글이 성공적으로 저장되었습니다.</p>";
            } else {
                echo "<p>게시글 저장에 실패했습니다.</p>";
            }
        }
    ?>

</div>

</body>
</html>
