<?php
session_start();
$cf = 'checked';
if(strcmp($_SESSION['check'],$cf)==0){
  header("Location:dev.php");
}
if(isset($_POST['submit'])){
  $pw = $_POST['password'];
  $pwt = "9987";
  if(strcmp($pw,$pwt)==0){
    $_SESSION['check'] = "checked";
    echo "<script> alert('ご訪問頂きありがとうございます。本ポートフォリオはPCかモバイルでのご閲覧を推奨しております。');" . "location.href = 'dev.php';". "</script>";
  }else{
  	print "パスワード不一致";
  }
}
;
?>
<!DOCTYPE html><head>
  <title>Portfolio</title>
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<div class="col-xs-10 col-xs-offset-1">
<form action="index.php" method="post">
  <link rel ="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="form-group">
    <label for="password text-center">閲覧にはパスワードが必要です</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" name="submit" class="btn btn-success btn-block">確認</button>
</form>
</body>
