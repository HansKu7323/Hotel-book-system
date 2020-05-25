<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["telephone"]) || $_POST["telephone"]=="" ||
  !isset($_POST["address"]) || $_POST["address"]=="" ||
  !isset($_POST["country"]) || $_POST["country"]=="" ||
  !isset($_POST["arrive"]) || $_POST["arrive"]=="" ||
  !isset($_POST["depart"]) || $_POST["depart"]=="" ||
  !isset($_POST["people"]) || $_POST["people"]=="" ||
  !isset($_POST["room"]) || $_POST["room"]=="" ||
  !isset($_POST["others"]) || $_POST["others"]=="" 
  // !isset($_POST["others"]) || $_POST["others"]==""
){
  exit('ParamError');
}


//1. POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$country = $_POST['country'];
$arrive = $_POST['arrive'];
$depart = $_POST['depart'];
$people = $_POST['people'];
$room = $_POST['room'];
$others = $_POST['others'];



//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=hotel_booking_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO hotel_booking_table(id, name, email, telephone, address, country ,arrive ,depart, people, room, indate )VALUES(NULL, :name, :email, :telephone, :country, :arrive, :depart, :people, :room, :others sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':telephone', $telephone, PDO::PARAM_STR); 
$stmt->bindValue(':address', $address, PDO::PARAM_STR); 
$stmt->bindValue(':country', $country, PDO::PARAM_STR); 
$stmt->bindValue(':arrive', $arrive, PDO::PARAM_STR); 
$stmt->bindValue(':depart', $depart, PDO::PARAM_STR); 
$stmt->bindValue(':people', $people, PDO::PARAM_INT); 
$stmt->bindValue(':room', $room, PDO::PARAM_STR); 
$stmt->bindValue(':others', $others, PDO::PARAM_STR); 
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
