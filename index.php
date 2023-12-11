<?php
include('index_DB.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>You and I</title>
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
    <img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_1280.jpg" alt="Main Image" width="300">
    <div class="main-title">
        MYHOME
    </div>
           <a href="login.php"><button type="submit" class="btn" name="login_user">로그인하러가기</button></a>
     
 <h2>게시글</h2>
    <!-- 게시글 작성 폼 -->
    <form class="post-form" method="post">
        <label for="post-description">게시글 작성:</label>
        <textarea id="post-description" name="description" required></textarea>

        <button type="submit" name="post">올리기</button>
    </form>

</div>

</body>
</html>
