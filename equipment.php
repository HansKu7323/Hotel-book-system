<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hans Hotel Japan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/equipment.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
  
    <!---------- nav ---------->
      <nav>
        <ul class="nav_list">
          <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
          <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
          <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
          <li class="nav_item"><a href="acces.php">アクセス</a></li>
          <li class="nav_item"><a href="booking.php">Booking</a></li>
        </ul>
      </nav>

      <!------- main -------->
      <main>
        <div class="titlebox">
          <h2>館内設備</h2>
          <hr>
        </div>
        <div>
          <ul class="link_bar">
            <li class="link_item"><a href="#dining">ダイニング</a></li>
            <li class="link_item"><a href="#hotspring">大浴場</a></li>
            <li class="link_item"><a href="#laundry">コインランドリー</a></li>
          </ul>
        </div>

        <!------- section -------->
        <section id="dining"> 
          <h3>メインダイニング</h3>
          <ul class="mainbox">
            <li class="mainbox_item">
              <div class="imgbox"> 
                <img src="img/equipment1.jpg" alt="">
              </div></li>
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
            </li>
          </ul>
        </section>
        <hr>
      
        <section id="hotspring">
        <h3>大浴場</h3>
          <ul class="mainbox">
            <li class="mainbox_item">
              <div class="imgbox"> 
                <img src="img/equipment2.jpg" alt="">
              </div></li>
            <li class="mainbox_item">
              <table>
                <tr>
                  <th>料金</th>
                  <td>宿泊者無料</td>
                </tr>
                <tr>
                  <th>利用時間</th>
                  <td>PM:15：00～24：00<br>AM:06：00～09：00</td>
                </tr>
                <tr>
                  <th>備品</th>
                  <td>体重計・ドライヤー・リンスインシャンプー・ボディーソープ</td>
                </tr>
              </table>
            </li>
          </ul>
        </section>
        <hr>

        <section id="laundry">
          <h3>コインランドリー</h3>
          <ul class="mainbox">
            <li class="mainbox_item">
              <div class="imgbox"> 
                <img src="img/equipment2.jpg" alt="">
              </div></li>
            <li class="mainbox_item">
              <table>
                <tr>
                  <th>フロア</th>
                  <td>	Ground Floor</td>
                </tr>
                <tr>
                  <th>利用時間</th>
                  <td>24時間</td>
                </tr>
                <tr>
                  <th>料金</th>
                  <td>洗濯のみ6kgまで（1回）300円/乾燥のみ3kgまで（1回）100円洗濯～乾燥（3kgまで）1回120分 500円/洗濯～乾燥（1kgまで）1回80分400</td>
                </tr>
              </table>
            </li>
          </ul>
        </section>
      </main>

    <!-----------foot nav ------------>
      <nav>
        <ul class="foot_nav_list">
          <li class="nav_item">
            <a href="index.php">Hans Hotel</a>
          </li>
          <li class="nav_item">
            <a href="guestroom.php">客室情報</a>
          </li>
          <li class="nav_item">
            <a href="restaurant.php">レストラン</a>
          </li>
          <li class="nav_item">
            <a href="access.php">アクセス</a>
          </li>
          <li class="nav_item">
            <a href="booking.php">Booking</a>
          </li>
        </ul>
      </nav>
  
    <!--------- footer ---------->
    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </div>
</body>
</html>