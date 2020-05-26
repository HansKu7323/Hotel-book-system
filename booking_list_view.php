<?php
//1.  DB接続します xxxにDB名を入れます
try {
// mampの場合は注意です！違います！別途後ほど確認します！
$pdo = new PDO('mysql:dbname=hotel_booking_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM hotel_booking_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>'.
    '<td>'.$result["id"].'</td>'.
    '<td>'.$result["name"].'</td>'.
    '<td>'.$result["email"].'</td>'.
    '<td>'.$result["telephone"].'</td>'.
    '<td>'.$result["country"].'</td>'.
    '<td>'.$result["people"].'</td>'.
    '<td>'.$result["arrive"].'</td>'.
    '<td>'.$result["depart"].'</td>'.
    '<td>'.$result["room_type"].'</td>'.
    '<td>'.$result["others"].'</td>'.
    '<td>'.$result["indate"].'</td>'.

    '</tr>';
 
    // $viewName .= $result["name"];
    // $viewEmail .= $result["email"];
    // $viewTelephone .= $result["telephone"];
    // $viewCountry .= $result["country"];
    // $viewPeople .= $result["people"];
    // $viewArrive .= $result["arrive"];
    // $viewDepart .= $result["depart"];
    // $viewRomm .= $result["romm"];
    // $viewOthers .= $result["others"];
    // $viewIndate .= $result["indate"];
  }
}
?>


<?php
$title = 'booking list- ';
include('head.php');
?>
<body>
  <header>
    <div class="container">
        <div class="mainbg">Hans Hotel Japan</div>
    </div>
  </header>

  <table class="table">
          <thead>
            <tr>
              <th class="th1">id</th>
              <th class="th2">Name</th>
              <th class="th3">Email</th>
              <th class="th4">Telephone</th>
              <th class="th5">country</th>
              <th class="th6">No. of People</th>
              <th class="th7">Arrive date</th>
              <th class="th8">Depart date</th>
              <th class="th9">Room type</th>
              <th class="th10">others</th>
              <th class="th10">input date</th>
            </tr>
          </thead>
          <tbody>
              <?=$view?>
            
          
          </tbody>
        </table>


</body>
</html>
