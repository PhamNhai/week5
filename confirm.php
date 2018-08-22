<?php
    $name = $_POST['user_name'];
    $furigana = $_POST['user_furigana'];
    $district = $_POST['user_district'];
    $address = $_POST['user_address'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
?>

<!DOCTYPE html>
<html>
<head>
<title>確認画面</title>
<meta charset="utf-8">
<link rel='stylesheet' href='custom.css'/>
</head>
<body>
<form method="post" action="done.php">
  <div class="element_wrap">
    <label class="">氏名:<?php echo $name; ?></label>
  </div>
  <div class="element_wrap">
    <label>ふりがな:<?php echo $furigana; ?></label>
  </div>
  <div class="element_wrap">
    <label>都道府県:<?php echo $district; ?></label>
  </div>
  <div class="element_wrap">
    <label>住所:<?php echo $address; ?></label>
  </div>
  <div class="element_wrap">
    <label>メールアドレス:<?php echo $email; ?></label>
  </div>

  <input type="submit" class = "button1" name="btn_submit" value="問い合わせ完了">
  <input type="button" class = "button2"  value="修正する" onclick="history.back()">
  <input type="hidden" name="user_name" value="<?php echo $name; ?>">
  <input type="hidden" name="user_furigana" value="<?php echo $furigana; ?>">
  <input type="hidden" name="user_district" value="<?php echo $district; ?>">
  <input type="hidden" name="user_address" value="<?php echo $address; ?>">
  <input type="hidden" name="user_email" value="<?php echo $email; ?>">
  <input type="hidden" name="user_password" value="<?php echo $password; ?>">
</form>
</body>
</html>