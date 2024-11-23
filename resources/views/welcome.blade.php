<!DOCTYPE HTML>
<html lang = "ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今日の運勢</title>
</head>
<body style="background-image: url('http://localhost/image/back1.gif'); text-align: center">
  <br>
  <hr>
  <h1>

  <?php
    date_default_timezone_set('Asia/Tokyo');  //タイムゾーンを設定
    list($sec, $min, $hour, $day, $mon, $year) = localtime();
    $mon = $mon + 1;
    $year = $year + 1900;
    print "$mon 月 $day 日 の運勢";
  ?>

  </h1>
  <hr><br><center>
  <table>
      <tr><th></th><th>勉強運</th><th>金銭運</th><th>健康運</th>
<th>恋愛運</th><th>総合運</th><th></th></tr>
      <tr style='vertical-align: bottom'>
      <th><img src='http://localhost/image/maneki_migi.gif'></th>
  <?php
    $sum = 0;
      for ($i = 0; $i < 5; $i++) {
          if ($i != 4) {
            $num = rand(1, 8);
            $sum = $sum + $num;
          } else {
            $num = $sum / 4;
          }

          $ret = omikujiImage($num);
          print"<td><img src='http://localhost/image/$ret'></td>\n";
      }
  ?>
      <th><img src="http://localhost/image/maneki_hidari.gif"></th>
      </tr>
  </table>
  </center><hr>
  <div style ="text-align: right">当たるも八卦当たらぬも八卦</div>
</body>
</html>

<?php
  function omikujiImage($num) {
    $fuda = ["kyou.jpg", "syokichi.jpg", "kichi.jpg", "daikichi.jpg"];
    if ($num <= 2) {
      $img = $fuda[0];
    } else if ($num <= 4) {
      $img = $fuda[1];
    } else if ($num <= 6) {
      $img = $fuda[2];
    } else {
      $img = $fuda[3];
    }

    return $img;
  }
?>

