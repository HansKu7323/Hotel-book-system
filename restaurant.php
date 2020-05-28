<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hans Hotel Japan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/restaurant.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-------- header ---------->
  <div class="container">
    <header>
          <h1>Hans Hotel Japan</h1>
          <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1
          </p>
          <p>Tel 0555-62-3901　　Fax 0555-62-3902</p>
    </header>
  
    <!------------- nav ------------->
      <nav>
        <ul class="nav_list">
          <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
          <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
          <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
          
          <li class="nav_item"><a href="access.php">アクセス</a></li>
          <li class="nav_item"><a href="booking.php">Booking</a></li>
        </ul>
      </nav>

      <main>
        <h2>レストラン</h2>
        <hr>
        <section class="dining">   
            <h3>Buffet・Dining（Ground Floor）</h3>
            <p>日本の味自慢。式の旬を存分に楽しむレストラン。</pack>
            <ul class="mainbox">
              <li class="mainbox_item">
                <!-- <div class="imgbox">  -->
                  <img src="img/rest1.jpg" alt="">
                <!-- </div> -->
              </li>
              <li class="mainbox_item">
                <table>
                  <tr>
                    <th>夕食</th>
                    <td>18：00～21：00</td>
                  </tr>
                  <tr>
                    <th>朝食</th>
                    <td>07：00～09：00</td>
                  </tr>
                  <tr>
                    <th>種類</th>
                    <td>和洋食ビュッフェ</td>
                  </tr>
                </table>
                <p>※オプション</p>
                <p>蟹食べ放題(グループ全員が対象になります。)※前日までの予約制</p>
                <p>神戸牛ステーキ(A5ランク)｜1人前300g※料金はお問い合わせください</p>
                <p>刺身舟盛2.5人前・4人前・6人前の3種類※当日の16：00までの予約制※料金はお問合せください</p>
              </li>
            </ul>
            <hr>
          </section>
          

          <h3>和洋食ビュッフェの写真</h3>
          <ul class="img_ul">
            <li class="img_item"><img src="img/rest2.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest3.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest4.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest5.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest6.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest7.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest8.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest9.jpg" alt=""></li>
            <li class="img_item"><img src="img/rest10.jpg" alt=""></li>
          </ul>
      </main>
      

      <!----------- nav ------------>

      <nav>
          <ul class="foot_nav_list">
            <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
            <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
            <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
            <li class="nav_item"><a href="access.php">アクセス</a></li>
            <li class="nav_item"><a href="booking.php">Booking</a></li>
          </ul>
      </nav>
  
     <!--------- footer ---------->
    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</div>
</body>
</html>