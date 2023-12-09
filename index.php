<?php
session_start();

// 회원가입 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 실제로는 데이터베이스에 저장하는 로직이 필요합니다.
    // 여기서는 간단히 세션에 저장하는 예시를 보여줍니다.
    $_SESSION['username'] = $username;

    header('Location: index.php'); // 회원가입 후 홈페이지로 이동
    exit();
}

// 로그인 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 실제로는 데이터베이스에서 사용자 정보를 확인하는 로직이 필요합니다.
    // 여기서는 간단히 세션에 저장하는 예시를 보여줍니다.
    $_SESSION['username'] = $username;

    header('Location: index.php'); // 로그인 후 홈페이지로 이동
    exit();
}
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
            $conn = mysqli_connect("localhost", "root", "1234", "indexdb");
            //실행할 SQL 쿼리문, table에서 모든 열
            $sql = "SELECT * FROM indextable";
            $result = mysqli_query($conn, $sql);
            // mysqli_fetch_array($result): 결과 집합에서 한 행을 배열로 가져오는 함수,각 행과 열 값을 가져와 출력
            while($row = mysqli_fetch_array($result)) {
                echo "<li>{$row['id']} - {$row['description']}</li>";
            }

        ?>

    </div>

    <!-- 회원가입 폼 추가 -->
    <form class="signup-form" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <button type="submit" name="signup">Sign Up</button>
    </form>

    <!-- 로그인 폼 추가 -->
    <form class="login-form" method="post">
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username" required>

        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" required>

        <button type="submit" name="login">Log In</button>
    </form>
</div>
</body>
</html>
