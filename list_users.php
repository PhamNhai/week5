<?php
    require('get_users.php');
    $sql = "SELECT * FROM information";
    if($conn->query($sql)->num_rows > 0){
        $name = array();
        $furigana = array();
        $district = array();
        $address = array();
        $email = array();
        $i = 0;
        $result = $conn->query($sql);

        function test($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        while($row = $result->fetch_assoc()) {
                 $name[$i] = test($row["name"]);
                $furigana[$i] = test($row["furigana"]);
                $district[$i] = test($row["district"]);
                $address[$i] = test($row["address"]);
                $email[$i] = test($row["email"]);
                $i ++;
        }
    }
?>

<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="main-signup">
        <h1>List users</h1>
        <div class="content-list-user">
            <div>
                <table class="table table-striped">
                    <tr>
                        <th class="title">名前</th>
                        <th class="title">ふりがな</th>
                        <th class="title">都道府県</th>
                        <th class="title">住所</th>
                        <th class="title">Eメールアドレス</th>
                    </tr>
                    <?php 
                        for ($j = 0; $j < $i; $j++){
                    ?>
                    <tr>
                        <th><?php echo $name[$j]; ?></th>
                        <th><?php echo $furigana[$j]; ?></th>
                        <th><?php echo $district[$j]; ?></th>
                        <th><?php echo $address[$j]; ?></th>
                        <th><?php echo $email[$j]; ?></th>
                    </tr>
                        <?php  } ?>
                   
                </table>
            </div>
        </div>
    </div>
</body>
</html>