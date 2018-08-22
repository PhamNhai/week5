<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>会員情報</title>
<link rel='stylesheet' href='custom.css'/>
</head>

<body>
<form action="confirm.php" method="post"> 
  <div>
    <label for="name" >名前:</label>
    <input type="text" id="name" name="user_name" required/>
  </div>
  <div>
    <label for="furigana" >ふりがな:</label>
    <input type="text" id="furigana" name="user_furigana" required/>
  </div>
  <div>
    <label for="district" >都道府県:</label>
    <input type="text" id="district" name="user_district" required />
  </div>
  <div>
    <label for="address" >住所:</label>
    <input type="text" id="address" name="user_address" required />
  </div>
  <div>
    <label for="mail" >メールアドレス:</label>
    <input type="mail" id="mail" name="user_email" required />
  </div>
  <div>
    <label for="password" >パスワード:</label>
    <input type="password" id="psw" pattern="(?=.*\d)(?=.{8,}" name="user_password" required />
  </div>
  <div>
    <input class="button1" name = "btn_confirm" type="submit" value="送信">
  </div>
</form>
<div id="message">
  <h3>Password must contain:</h3>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<script>
var myInput = document.getElementById("psw");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>
