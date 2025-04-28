<?php

$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahasi' => '高橋'
];
var_dump($name);

echo $name['takahasi'];

foreach ($name as $value) {
    echo $value . '<ar>';
}

foreach ($name as $key => $value) {
    echo 'キーは' . $key . "、名前は" . $value . "<br>";
}
