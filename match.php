<?php
if(isset($_POST['submit'])){
$pw = $_POST['password'];
if($pw == 9987){
  $_SESSION['check'] = 'checked';
}else{
  echo "パスワードが違います。";
}
}
;
?>
