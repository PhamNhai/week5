<?php
    // header("X-XSS-Protection: 0");
    // $name = $_POST['user_name'];
    // $furigana = $_POST['user_furigana'];
    // $district = $_POST['user_district'];
    // $address = $_POST['user_address'];
    // $email = $_POST['user_email'];
    // $password = $_POST['user_password'];

      $name = kiemTra_input($_POST["user_name"]);
      $furigana = kiemTra_input($_POST["user_furigana"]);
      $district = kiemTra_input($_POST["user_district"]);
      $address = kiemTra_input($_POST["user_address"]);
      $email = kiemTra_input($_POST["user_email"]);
      $password = kiemTra_input($_POST["user_password"]);

    function kiemTra_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
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
    <h3 class="">氏名:<?php echo $name; ?></h3>
  </div>
  <div class="element_wrap">
    <h3 class="">ふりがな:<?php echo $furigana; ?></h3>
  </div>
  <div class="element_wrap">
    <h3 class="">都道府県:<?php echo $district; ?></h3>
  </div>
  <div class="element_wrap">
    <h3 class="">住所:<?php echo $address; ?></h3>
  </div>
  <div class="element_wrap">
    <h3 class="">メールアドレス:<?php echo $email; ?></h3>
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