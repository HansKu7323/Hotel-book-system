<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hans Hotel Japan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/guestroom.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">

    <!------ header ------->
    <header>
      <h1>Hans Hotel Japan</h1>
      <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1</p>
      <p>Tel 0555-62-3901　　Fax 0555-62-3902</p>
    </header>

    <!------ nav ------->
    <nav>
      <ul class="nav_list">
        <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
        <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
        <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
        <li class="nav_item"><a href="access.php">アクセス</a></li>
        <li class="nav_item"><a href="booking.php">Booking</a></li>
      </ul>
    </nav>

    <!------- main ------->
    <main>
      <div class="guestroom">
          <img src="img/room.jpg" alt="">
      </div>

      <!------ 客室情報 ------>
      <div class="title_box">
        <h2>客室情報</h2>
      </div>
      <hr>
      <div class=room_infomation>
        <div class="room_part">
          <img src="img/amenity.jpg" alt="">
          <h3>アメニティー</h3>
          <p>日本を意識したデザインの袋入り歯ブラシセット（歯磨き粉GUM）、二つ折りスリムブラシ、ヘアリング、シャワーキャップ、コットン、綿棒レザー髭剃り、フォームソープシャンプー、コンディショナー、ボディーソープはPOLA製で女性が使いやすい商品を揃えました。</p>
        </div>
        <div class="room_part">
          <img src="img/roomkey.jpg" alt="">
          <h3>ルームキー</h3>
          <p>C/Iチェックイン15：00
            C/Oチェックアウト10：00
            ルームーキーはシリンダーキーとスティックキーの2種類スティックキーは電源のスイッチ用です。</p>
        </div>
        <div class="room_part">
          <img src="img/internet.jpg" alt="">
          <h3>インターネット接続</h3>
          <p>インターネット接続は全客室に無線LAN（wifi）を装備。ご利用の際はパスワードが必要となります。ロビー・レストランも無線LAN（wifi）をご利用いただけます。</p>
        </div>
      </div>

      <!------- 客室一覧 ------->
      <div class="title_box">
        <h2>客室一覧</h2>
      </div>
      <hr>

      <div class=room_type>
        <div class="room_part">
          <img src="img/sgl.jpg" alt="">
          <h3>SGL TWN</h3>
          <p>洋室TWN(SG)全75室をご用意ゆとりある客室です。</p>
          <p>広さ.27㎡　定員.2名</p>
          <p>ベッド.1,02cm×2,00cm</p>
        </div>
        <div class="room_part">
          <img src="img/twn.jpg" alt="">
          <h3>SEMI TWN</h3>
          <p>洋室TWN(SD)全18室をご用意広めのベッドで快適に睡眠できる客室です。</p>
          <p>広さ.27㎡　定員.2名</p>
          <p>ベッド.1,24cm×2,00cm</p>
        </div>
        <div class="room_part">
          <img src="img/dbl.jpg" alt="">
          <h3>DBL ROOM</h3>
          <p>DBL全6室をご用意ゆとりある客室です。</p>
          <p>広さ.27㎡　定員.2名</p>
          <p>ベッド.1,800×2,000</p>
        </div>
        <div class="room_part">
          <img src="img/quad.jpg" alt="">
          <h3>QUAD ROOM</h3>
          <p>FirstFloor・SecondFloorに1室をご用意広めのベッドで快適に睡眠できる客室です。当ホテルに唯一1室ご用意。ご家族、グループでゆったり過ごせるお部屋です。</P>
          <P>広さ.54㎡　定員.4名</P>
          <P>ベッド.1,020×2,000</p>
        </div>
        <div class="room_part">
          <img src="img/twn-cone.jpg" alt="">
          <h3>部屋設備</h3>
          <p>液晶テレビ32型、ウォッシュレット、冷蔵庫、ドライヤー、ケトル、各種アメニティ、茶器セット、クローゼット、茶羽織、洗面台</P>
        </div>
        <div class="room_part">
          <img src="img/dxtw.jpg" alt="">
          <h3>シモンズベット</h3>
          <p>世界中で認められたクオリティ。シモンズベッドポケットコイルマットレスを用意しております。</P>
         
        </div>

      </div>
    </main>

      <!------- na ------->
      <nav>
          <ul class="foot_nav_list">
            <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
            <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
            <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
            <li class="nav_item"><a href="access.php">アクセス</a></li>
            <li class="nav_item"><a href="booking.php">Booking</a></li>
          </ul>
      </nav>
  
    <!------ footer ------->
    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </div>
  
</body>
</html>