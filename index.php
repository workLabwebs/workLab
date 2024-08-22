<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Lab</title>
  <link rel="stylesheet" href="index.css">
  <link id="favicon" rel="shortcut icon" href="https://images2.nplod.ru/gen_images/GyS4k9ncqLz29AnQoA0szmqPkPyTwXAG.jpg" type="image/x-icon">
</head>
<body>
  <header>
      <img src="https://images2.nplod.ru/gen_images/GyS4k9ncqLz29AnQoA0szmqPkPyTwXAG.jpg" alt="logo">
      <p>WORKLAB</p>
      <div>
        <form action="index.php" method="post">
          <button type="submit">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" alt="vklogo">
            ВОЙТИ
          </button>
        </form>
        
      </div>
  </header>
  <main>
    <img src="https://imarket.by/upload/medialibrary/9ac/9ac21866e6934bd75c1c8a2666c5b1d3.jpg" alt="mainimg">
    <h3 id="aboutH3">Чем мы занимаемся?</h3>

    <p id="about">
      Наша компания является посредником между заказчиком и исполнителем.
      К нам обращаются с целью продвижения своего продукта в результате
      создания заданий с оплатой. Наша выгода это % с услуги продвижния.
      Оплата исполнителя за выполнение задания варьируются от 100 до 500 рублей (1.1$ - 5.5$)!
    </p>

    <div id="loginField">
      <h3>Начать зарабатывать</h3>
      <form action="index.php" method="post">
        <button type="submit">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/VK_Compact_Logo_%282021-present%29.svg/1024px-VK_Compact_Logo_%282021-present%29.svg.png" alt="vklogo">
          Авторизируйтесь через VK
        </button>
      </form>
    </div>
  </main>

  <footer>
    <div>
      <p>WebLab©</p>
      <p>Поддержка</p>
    </div>
    <img src="https://i.ibb.co/1G26pph/qrchimp-X1024.png" alt="qrcode">
  </footer>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: main.php');
  }
  ?>
</body>
</html>