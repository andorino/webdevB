<?php
// $str = "〒450-0002 愛知県名古屋市中村区名駅3-24-15";
// preg_match("/\d{3}-\d{4}/u", $str, $match);
// var_dump($match);

$str = "1234567";
$rtn = preg_match("/\A\d{7}\z/u", $str);
//"/\p{7}/u"は数字七桁のパターンを探す正規表現
$str2 = "あいうえお";
$rtn2 = preg_match("/\A\d{7}\z/u", $str2);
$str3 = "111-1111";
$rtn3 = preg_match("/\A\d{7}\z/u", $str3);
$str4 = "1234567";
$rtn4 = preg_match("/\A\d{7}\z/u", $str4);

echo "結果１";
var_dump($rtn);
echo "結果2";
var_dump($rtn2);
echo "結果3";
var_dump($rtn3);
echo "結果4";
var_dump($rtn4);
